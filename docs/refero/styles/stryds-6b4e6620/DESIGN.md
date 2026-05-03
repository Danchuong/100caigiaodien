# Stryds — Refero Style

- Refero URL: https://styles.refero.design/style/6b4e6620-5c06-4dc1-931b-82265116f6f2
- Site URL: https://stryds.com
- ID: 6b4e6620-5c06-4dc1-931b-82265116f6f2
- Theme: dark
- Industry: other
- Created: 2026-04-30T01:21:27.601Z
- Ranks: newest: 622, popular: 1073, trending: 971

> Neon rings in midnight

## Description

Stryds embodies a dark, vibrant gamified aesthetic. The interface uses deep, near-black backgrounds contrasting with neon gradients and vivid accent colors. Typography is bold and assertive, prioritizing impact over traditional readability, often using large scale and tight tracking. Components are rounded and soft, emphasizing a playful yet high-tech feel, with a strategic use of color to highlight active states and primary actions.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Deep Space | #040126 | neutral | Text on bright surfaces, button borders for outlined actions, icon colors. Its deep violet tint adds subtle complexity to what would otherwise be pure black |
| Neon Green | #a6ff00 | brand | Primary action buttons, active indicators, and prominent highlight accents. This vivid green provides a sharp, energetic contrast against the dark background |
| Dark Matter | #333333 | neutral | Divider lines, subtle borders, secondary text, and muted icon fills. A foundational dark gray for content separation and hierarchy |
| Midnight Canvas | #000000 | neutral | Dominant background for the overall page, creating a deep, immersive dark mode experience |
| Graphite Border | #3d3d3d | neutral | Card borders and subtle separating lines, slightly lighter than Dark Matter for softer definition |
| Muted Ash | #6f6f6f | neutral | Tertiary text, subheadings, and supporting content. Provides subdued contrast, allowing primary information to stand out |
| Card Surface | #171717 | neutral | Default background for cards and containers, subtly elevated from the main canvas |
| Bright Text | #fdfdfd | neutral | Primary text on dark backgrounds, ensuring high legibility for headings and key information |
| Component Dark | #101010 | neutral | Background for certain buttons and interactive elements, providing a slightly lighter dark tone than the main canvas |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Arial | Helvetica Neue | 400, 500 | 14px | 1.43 | Default text, links, and card descriptions. The system font choice implies directness and native integration. |
| Sf Pro Display | Inter | 500, 600 | 16px, 21px, 36px, 44px, 78px, 109px, 148px, 184px | 0.95, 1.00, 1.10, 1.20, 1.25 | Headings and prominent display text. The wide range of sizes and tight letter spacing at larger scales creates a strong, impactful visual hierarchy, giving headlines a 'command center' feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1.43 | -0.48 |
| heading-sm | 21 | 1.2 | -0.57 |
| heading | 36 | 1.1 | -0.83 |
| heading-lg | 44 | 1 | -1.01 |
| display | 78 | 1 | -1.33 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "100px",
    "cards": "40px",
    "buttons": "100px"
  },
  "elementGap": "16px",
  "sectionGap": "80px",
  "cardPadding": "80px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Call to action button

Filled with Neon Green (#a6ff00) background, Deep Space (#040126) text. Features 100px border radius, 13px vertical padding, 20px horizontal padding, creating a distinct pill shape for immediate visibility.

### Ghost Icon Button

**Role:** Secondary action or branding button

Component Dark (#101010) background, Deep Space (#040126) text and border. Features 100px border radius, 16px vertical padding, 56px left padding (implying icon alignment), and 20px right padding. Used for branding or less prominent interactive elements.

### Elevated Card

**Role:** Content container for featured sections

Card Surface (#171717) background, 40px border radius. Uses 80px internal padding on all sides, providing generous breathing room for content. Bordered with Graphite Border (#3d3d3d).

### Transparent Content Card

**Role:** Subtle content grouping within larger sections

Transparent background, 40px border radius. Used for visually light content grouping without adding additional surface depth. Contains 0px padding, relying on content's own spacing.

## Do's

- Always use Deep Space (#040126) for neutral button outlines on dark backgrounds.
- Prioritize Neon Green (#a6ff00) for all primary calls to action, ensuring button background fills and critical highlights stand out.
- Apply a 100px border radius to all buttons and small interactive elements, creating a distinct pill-shaped aesthetic.
- Maintain a section gap of 80px between major content blocks to create a generous, comfortable density.
- Use Bright Text (#fdfdfd) for all primary headings and body text on dark backgrounds to ensure legibility.
- Ensure headings use a tight line height, typically 0.95 to 1.25, with negative letter spacing for a compact, impactful look.
- Backgrounds should predominantly use Midnight Canvas (#000000) or Card Surface (#171717) to maintain the dark theme.

## Don'ts

- Do not use highly saturated colors for large background areas; colors are reserved for accents and interactive elements.
- Avoid sharp corners; all significant UI elements like cards and buttons should embrace the generous 40px or 100px border radii.
- Do not use generic system fonts for display typography; Sf Pro Display (or a suitable substitute) is critical for brand impact.
- Refrain from excessive use of visual hierarchy with shadows; rely on color contrast and spacing for distinction.
- Do not break the dark theme with light backgrounds for content sections; maintain consistency with the neutral dark palette.
- Avoid standard letter spacing on headings; always apply the specified negative tracking for a unique type rhythm.

## Layout

The page uses a full-bleed model, with content elements centered within a flexible width, rather than a strict `pageMaxWidth`. The hero section is full-bleed, featuring the brand name and tagline centered over the dynamic, colorful rings on a Midnight Canvas background. Sections appear to flow seamlessly, punctuated by the large background graphics, with a consistent vertical section gap of 80px. Content within sections tends to be centrally stacked or arranged in prominent, isolated blocks. Navigation is minimal, likely integrated into a subtle bottom bar as suggested by the ghost and primary action buttons at the base of the viewport.

## Imagery

This site features abstract, energetic visuals dominated by vibrant, multi-colored rings that swirl and overlap. Imagery is primarily abstract and decorative, forming large background elements rather than product-specific showcases. The rings appear to be vector-based or graphically rendered, using a broad spectrum of vivid hues against deep dark backgrounds. There are some small profile picture-style circular image crops, suggesting social or user-generated content, but they are not the primary imagery focus. The visual language is image-heavy in decorative elements, but text-dominant for content presentation, relying on the background graphics for atmosphere while keeping the foreground UI clear.

## Similar Brands

| Business | Why |
| --- | --- |
| Spotify | Dark UI with vivid accent colors and prominent, rounded interactive elements. |
| Discord | Deep dark aesthetic with playful, sometimes neon-like, color accents for active states and highlights. |
| Apple Fitness+ | Uses a dark backdrop with vibrant, color-coded rings or graphic elements to convey activity and progress. |
| Linear | Focus on high information density within a dark theme, paired with strong, confident typography. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #fdfdfd
background: #000000
border: #333333
accent: #a6ff00
primary action: #a6ff00 (filled action)

Example Component Prompts:
Create a hero section with 'Stryds' as the main title and 'The Social Health App' as a subtitle: Midnight Canvas (#000000) background. Main title in Sf Pro Display weight 600, 184px, #fdfdfd, letter-spacing -0.0100em. Subtitle in Sf Pro Display weight 500, 36px, #6f6f6f, letter-spacing -0.0260em. Both centered.

Create a Primary Action Button: #a6ff00 background, #333333 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

Create an elevated card with a headline 'Your Progress' and body text underneath: Card Surface (#171717) background, 40px border radius, 80px padding. Headline in Sf Pro Display weight 600, 44px, #fdfdfd, letter-spacing -0.0230em. Body text in Arial weight 400, 14px, #fdfdfd.

Create a ghost button labeled 'Stryds' with an implied icon offset: Component Dark (#101010) background, Deep Space (#040126) text in Arial weight 400, 14px, 100px border radius, 16px vertical padding, 56px left padding, 20px right padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512066693-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777512066693-thumb.jpg |
