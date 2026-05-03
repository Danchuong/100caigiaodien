# Deezer — Refero Style

- Refero URL: https://styles.refero.design/style/502af24a-b765-44b2-828f-dd610f27a125
- Site URL: https://deezer.com
- ID: 502af24a-b765-44b2-828f-dd610f27a125
- Theme: dark
- Industry: media
- Created: 2026-04-02T11:47:28.000Z
- Ranks: newest: 963, popular: 368, trending: 644

> Electric Violet Nightclub – a bold, high-contrast digital space pulsates with vibrant purple against a deep, dark backdrop.

## Description

This design system evokes a 'Digital Nightclub' vibe, pairing a dark, almost black background with vibrant, single-hue accents. Prominent high-contrast typography, especially the massive, weighty headlines, grabs immediate attention. The liberal use of a vivid violet for interactive elements and highlights creates an energetic pulse against the deep neutrals, reminiscent of neon lighting in a dim space. Sharp corners on most elements are softened by a few key rounded components, adding subtle visual dynamism.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Void | #0f0d13 | neutral | Primary background, deep sections, dark text on light elements. |
| Ghost White | #fdfcfe | neutral | Primary text, contrasting backgrounds for nested elements, card surfaces. |
| Slate Echo | #555257 | neutral | Secondary text, disabled states, subtle borders. A desaturated shadow of the primary text. |
| Ash Whisper | #a9a6aa | neutral | Tertiary text, subtle separators, less prominent information. Acts as a light gray against the dark background. |
| Deep Violet | #a238ff | brand | Primary interactive elements like CTA buttons and active navigation items — providing focus and urgency against the dark theme. |
| Lavender Haze | #d09aff | brand | Subtle visual highlights, secondary interactive elements, or thematic details. |
| Dark Plum | #14041 | neutral | Decorative strokes, background patterns, adding depth with a hint of purple tint to near-black. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Deezer Brand | Montserrat Black | 700, 800 | 18px, 19px, 24px, 35px, 46px, 56px, 120px, 140px | 0.71, 0.90, 1.00, 1.04, 1.20 | Display headlines and prominent calls-to-action. The extremely tight line height and bold weight create an aggressive, confident statement. |
| Inter | Inter | 400, 500, 600, 700 | 12px, 14px, 16px, 20px | 1.00, 1.20, 1.33, 1.38, 1.50, 1.56, 1.75, 1.79 | Body copy, navigation links, button labels, and secondary information. Its clean legibility provides a functional contrast to the expressive display font. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0 |
| body-sm | 14 | 1.56 | 0 |
| body | 16 | 1.5 | 0 |
| subheading | 18 | 1.2 | 0.005 |
| heading-sm | 20 | 1.33 | 0 |
| heading | 24 | 1 | 0.004 |
| heading-lg | 35 | 1.04 | 0.002 |
| display | 56 | 0.9 | 0.013 |
| display-xl | 120 | 0.71 | 0.013 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "badges": "9px / 75%",
    "buttons": "12px",
    "general": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "90-140px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Pricing Card — Premium 1 Month Free



### FAQ Accordion



### CTA Banner — Live the Music with Deezer



### Secondary Ghost Button

**Role:** Action

Ghost White (#fdfcfe) background, Midnight Void (#191922) text, 12px border-radius, 8px vertical padding, 32px horizontal padding. Used for less prominent actions.

### Tertiary Dark Button

**Role:** Action

Midnight Void (#121216 - derived from component), Ghost White (#fdfcfe) text, 8px border-radius, 4px vertical padding, 16px horizontal padding. For minor actions or within darker sections.

### Feature Card

**Role:** Content container

Ghost White (#fdfcfe) background, 8px border-radius, 24px padding on all sides. Used for presenting information blocks on a light surface.

### Navigation Link

**Role:** Navigation

Inter font, 16px, 400 weight, Midnight Void (#0f0d13) color on light background or Ghost White (#fdfcfe) on dark background. No explicit background/border, interaction is text color change.

## Do's

- Prioritize Deep Violet (#a238ff) for all primary interactive elements to maintain energetic brand presence.
- Use Deezer Brand font exclusively for display headings (35px and above) and critical calls to action, leveraging weights 700 and 800 for maximum impact.
- Maintain a clear high-contrast hierarchy with Midnight Void (#0f0d13) and Ghost White (#fdfcfe) as primary text/background pairing.
- Apply 12px border-radius for primary buttons and 8px for cards and secondary buttons to establish a consistent softness.
- Ensure generous vertical spacing between sections (90-140px) to provide clear visual breaks and comfortable density.
- Utilize Inter font for all body copy, navigation, and detailed information, at weights 400-600 for optimal legibility.

## Don'ts

- Avoid using gray tones for primary interactive elements; reserve Deep Violet (#a238ff) for key actions.
- Do not use Deezer Brand font for body text or small labels; its scale and letter spacing are designed for display.
- Refrain from introducing additional saturated colors beyond the established violet palette, as it dilutes the brand's energetic focus.
- Do not use soft shadows for elevation; rely on background color shifts between Midnight Void (#0f0d13) and Ghost White (#fdfcfe) for depth.
- Avoid mixed border-radii within the same component type; stick to 12px for prominent buttons and 8px for cards.
- Do not introduce tight letter spacing on Inter font family smaller than 16px; it should remain 'normal' for readability.

## Similar Brands

| Business | Why |
| --- | --- |
| Spotify | Dominant use of a dark theme with a single prominent accent color for interactivity, though Spotify uses green. |
| Apple Music | Clean, high-contrast dark mode interfaces with focus on bold typography and a limited bright color palette for highlights. |
| Tidal | Sleek dark interface with an emphasis on strong typography and a focused color scheme to highlight content and calls to action. |
| SoundCloud | Features a strong brand color (orange) used as a primary accent against a predominantly dark or light neutral canvas. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (dark background): #fdfcfe (Ghost White)
- Text (light background): #0f0d13 (Midnight Void)
- Primary Background: #0f0d13 (Midnight Void)
- Call-to-Action: #a238ff (Deep Violet)
- Border/Divider (subtle): #a9a6aa (Ash Whisper)

### Example Component Prompts
1. Create a Hero Section: full-width Midnight Void (#0f0d13) background. Centered headline 'YOUR MUSIC, ELEVATED' in Deezer Brand font, 120px, weight 800, #fdfcfe color, line-height 0.9. Below, a subtitle 'Stream millions of songs' in Inter font, 20px, weight 400, #a9a6aa color. Beneath that, a Primary CTA Button 'Start Free Trial'.
2. Create a Feature Card: Ghost White (#fdfcfe) background, 8px border-radius, 24px padding. Inside, 'Enhanced Quality' heading in Inter font, 20px, weight 700, #0f0d13 color. Below, body text 'Experience crystal-clear audio playback.' in Inter font, 16px, weight 400, #555257 color. Add a small filled icon (Ghost White on Deep Violet background) at the top-left.
3. Create a Navigation Bar: Midnight Void (#0f0d13) background, 80px height. On the left, 'Deezer' logo in #fdfcfe. On the right, a series of light text links 'Plans', 'Features', 'Music' in Inter font, 16px, weight 400, #fdfcfe. End with a 'Log In' text link and a Primary CTA Button 'Sign Up'.
4. Create an 'Offer Details' List Item: Ghost White (#fdfcfe) background. Use Inter font, 16px, weight 400, #0f0d13 color. Prepend with a small checkmark icon in Deep Violet (#a238ff). Example text: 'Over 120 million songs'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775943804340-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775943804340-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/502af24a-b765-44b2-828f-dd610f27a125-1777567746243-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/502af24a-b765-44b2-828f-dd610f27a125-1777567746243-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/502af24a-b765-44b2-828f-dd610f27a125-1777567746243-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/502af24a-b765-44b2-828f-dd610f27a125-1777567746243-preview-detail-poster.jpg |
