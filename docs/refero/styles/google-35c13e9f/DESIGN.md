# Google — Refero Style

- Refero URL: https://styles.refero.design/style/35c13e9f-02fc-44d4-995f-c2e26998d49f
- Site URL: https://manetatoulian.com
- ID: 35c13e9f-02fc-44d4-995f-c2e26998d49f
- Theme: dark
- Industry: ai
- Created: 2026-04-30T03:09:34.049Z
- Ranks: newest: 216, popular: 1295, trending: 1307

> Deep charcoal, subtle glow

## Description

The Google design system is a 'dark mode first' experience with a substantial canvas of deep charcoal and highly subtle surface differentiation. Interaction elements are clearly defined through achromatic outlines and fills, while a carefully restrained use of vibrant, multi-hued gradients and blue accents provides bursts of visual interest for key actions and branding. Typography is generally clean and monochromatic, appearing as crisp white against dark surfaces, relying on weight and size for hierarchy. The overall feel is one of understated functionality and quiet efficiency.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Carbon Canvas | #0e0e11 | neutral | Primary page background, base surface for all content |
| Steel Surface | #16171a | neutral | Slightly lighter surface for secondary components like cards or elevated sections, creating a subtle layer distinction |
| Graphite Card | #22242a | neutral | Background for cards and interactive elements, providing a clear boundary against the darker canvas |
| Button Gray | #303134 | neutral | Background for neutral filled buttons, offering a muted interactive element |
| Ghost Outline | #4d5156 | neutral | Mid-tone panel surface for subdued dark UI layers and secondary containers. Do not promote it to the primary CTA color |
| Subtle Ash | #444746 | neutral | Subtle borders and dividers, providing minimal separation without drawing attention |
| Primary Text | #e8e8e8 | neutral | Main body text, headings, and icon fills, offering high contrast against dark backgrounds |
| Muted Text | #9e9e9e | neutral | Secondary text, descriptive labels, and inactive states, less prominent than primary text |
| Google Blue | #99c3ff | accent | Outlined button borders, active link text, and highlights. This blue signifies interactive elements |
| AI Blue | #a8c7fa | accent | Borders for AI-related components, distinguishing specific features |
| AI Mode Gradient | #34a853 | brand | Supporting palette color for small decorative accents when the core palette needs contrast. |
| Blue Header Accent | #c2e7ff | accent | Blue wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Google Sans | Roboto, sans-serif | 400, 500 | 14px, 16px, 28px | 1.20, 1.29, 1.38, 1.43 | Used for main interactive elements like buttons, prominent body text, and some headings. Its clean aesthetic maintains readability on dark backgrounds. |
| Google Sans Text | Roboto, sans-serif | 500 | 14px | 1.29 | Specifically used for navigation items, providing a distinct textual style for top-level interactions. |
| Arial | Helvetica Neue, sans-serif | 400 | 12px, 13px, 14px | 1.20, 1.43, 1.85, 2.15 | General purpose text for links, secondary information, and small body content. Its system-level availability ensures broad compatibility. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.43 | 0.014 |
| body-lg | 14 | 1.43 | 0.014 |
| heading | 28 | 1.2 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "9999px",
    "cards": "16px",
    "buttons": "8px",
    "searchBarMain": "26px",
    "searchBarInner": "100px"
  },
  "elementGap": "15px",
  "sectionGap": "20px",
  "cardPadding": "14px",
  "pageMaxWidth": null
}
```

## Components

### Neutral Ghost Button

**Role:** Standard interactive element for secondary actions.

Transparent background, Primary Text color (#e8e8e8) for text and border. No padding or border-radius specified globally, implies context-specific sizing or minimal inherent styling.

### Filled Action Button

**Role:** Primary or emphasized action. Default subtle fill.

Background Button Gray (#303134), text Primary Text (#e8e8e8), 8px border-radius, 16px horizontal padding.

### AI Mode Pill Button

**Role:** Distinctive button for AI-related features.

Transparent background, AI Blue (#99c3ff) text, 9999px border-radius making it a pill shape, no intrinsic padding beyond content.

### Circular Icon Button

**Role:** Small, interactive element for icons.

Transparent background, AI Blue (#99c3ff) for icon fill and border, 50% border-radius for a circular shape, 8px padding.

### Search Input Field

**Role:** Main interaction point for search queries.

Transparent background, Primary Text (#e8e8e8) for text and border, no border-radius. Padding of 14px top. Note: the actual search bar has a rounded card container around this.

### Large Search Container Card

**Role:** Container for the central search input and related elements.

Background Graphite Card (#22242a), 16px border-radius, soft elevation shadow rgba(0, 0, 0, 0.2) 0px 2px 10px 0px.

## Do's

- Always use Carbon Canvas (#0e0e11) as the base background for pages and main sections.
- Layer content using Graphite Card (#22242a) for containers and interactive fields, contrasted with Button Gray (#303134) for filled neutral buttons.
- Reserve Google Blue (#99c3ff) for primary interactive outlines and active text links.
- Apply the AI Mode Gradient for any 'AI Mode' components to maintain brand recognition.
- Use Primary Text (#e8e8e8) for all main text elements to ensure high readability on dark backgrounds.
- Maintain a comfortable density with 15px element gaps for most inline content and 20px for section spacing.
- Ensure all buttons use an 8px border-radius, unless specifically intended for a pill shape (9999px).

## Don'ts

- Do not introduce light backgrounds; the system is strictly dark mode.
- Avoid excessive use of color; only use accent colors for functional highlights or branded elements.
- Do not deviate from the specified typography families; use Google Sans for prominent text and Arial for utility.
- Do not create new shadow styles; limit elevation to the single defined card shadow.
- Avoid custom border-radii; adhere to the 8px, 16px, 26px, 100px, or 9999px values.
- Do not blend text colors; avoid shades between Primary Text (#e8e8e8) and Muted Text (#9e9e9e) unless defined.

## Layout

The layout follows a contained, centered model, likely with a flexible max-width, though not explicitly defined. The hero section is dominated by the centered Google logo and search bar, occupying significant vertical space. Below the main search interaction, content appears to be stacked vertically, with consistent vertical spacing between distinct content blocks. The footer is a full-bleed dark strip, providing global navigation and legal information. There's an underlying grid for discrete elements like suggestion buttons, but the overall presentation is text-dominant with functional UI components guiding interaction rather than complex visual arrangements.

## Imagery

This design system uses a minimal visual language for imagery, primarily relying on small, functional icons rather than large graphics or photography. The icons are typically monochrome, matching the Primary Text color (#e8e8e8), creating a sense of clarity and utility. There's a notable exception in the 'Modo IA' button, which features a multi-colored gradient icon as a distinct brand element. Overall, visual density is low, with imagery serving as clear, concise functional indicators rather than decorative elements.

## Elevation

| Element | Style |
| --- | --- |
| Card Container | rgba(0, 0, 0, 0.2) 0px 2px 10px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| DuckDuckGo | Shares a minimalistic dark-mode search interface with a focus on core functionality and subtle achromatic UI elements. |
| Bing (Dark Mode) | Utilizes a dark, muted background with white text and hints of subtle color for interactive elements and accents. |
| Notion (Dark Mode) | Features a deep, desaturated dark theme with strong reliance on contrast for typography and subtle background variations for layering. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #e8e8e8
background: #0e0e11
border: #4d5156
accent: #99c3ff
primary action: #303134 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #303134 background, #e8e8e8 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a filled button: Use a Filled Action Button with Button Gray (#303134) background, Primary Text (#e8e8e8) text, 8px border-radius, and 16px horizontal padding.
3. Create an AI Mode button: Use an AI Mode Pill Button with transparent background, AI Blue (#99c3ff) text, and conic-gradient(rgba(49, 134, 255, 0) 0deg, rgb(52, 168, 83) 43deg, rgb(255, 211, 20) 65deg, rgb(255, 70, 65) 105deg, rgb(49, 134, 255) 144deg, rgb(49, 134, 255) 180deg, rgba(49, 134, 255, 0) 324deg, rgba(49, 134, 255, 0) 360deg) for its gradient branding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518553059-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777518553059-thumb.jpg |
