# Gitbook — Refero Style

- Refero URL: https://styles.refero.design/style/ea8a4150-e062-4c0e-94ca-668a3033eb63
- Site URL: https://www.gitbook.com
- ID: ea8a4150-e062-4c0e-94ca-668a3033eb63
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:16:04.816Z
- Ranks: newest: 851, popular: 903, trending: 707

> Architectural blueprint on bright white

## Description

GitBook employs a crisp, structured aesthetic with a focus on product documentation. The visual system features abundant negative space, subtle surface differentiation, and a single vibrant orange accent color. Typography is precise and highly tracked, guiding the eye through dense information without visual clutter. Components favor soft curves and gentle elevation, projecting an approachable yet authoritative tone through careful restraint rather than overt decoration.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas | #ffffff | neutral | Page backgrounds, primary card surfaces, active input backgrounds |
| Ink | #1c1917 | neutral | Primary headings, active button backgrounds, dark text accents |
| Ash | #57534d | neutral | Body text, secondary text, border for muted elements |
| Stone | #79716b | neutral | Muted body text, secondary icons, subtle borders |
| Parchment | #fafaf9 | neutral | Secondary card backgrounds, slightly elevated surfaces |
| Whisper Gray | #efeeed | neutral | Subtle surface accents, very light card backgrounds, hover states |
| Outline Gray | #e5e5e5 | neutral | Subtle button and input borders |
| Obsidian | #000000 | neutral | Hero headlines, critical UI text, dark icon fills |
| Sunset Orange | #fe551b | accent | Decorative accents, illustrative elements, subtle background washes for differentiation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px, 16px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| General Sans Variable | system-ui, sans-serif | 700 | 12px, 14px, 16px, 20px, 24px, 30px, 32px, 38px, 45px, 55px | 1.00, 1.20, 1.30, 1.40, 1.50, 1.60 | Hero headlines and major section titles, where impactful, tightly tracked text announces key sections. The variable bold weight provides visual strength. |
| Inter | system-ui, sans-serif | 400, 500, 600 | 10px, 11px, 12px, 14px, 15px, 16px, 20px | 1.08, 1.18, 1.20, 1.30, 1.40, 1.60 | Body text, subheadings, and UI labels. Its range of weights allows for hierarchy within text blocks while maintaining a consistent visual voice. |
| General Sans | system-ui, sans-serif | 500 | 18px | 1.60 | Stand-alone body text components and feature descriptions. A specific weight and size choice for narrative blocks. |
| Geist Mono | Space Mono | 600 | 10px, 14px | 1.00, 1.30 | Code snippets, technical terms, and small, functional labels requiring clear separation from general text. |
| General Sans Variable Variable Bold |  | 700 | 12px, 14px, 16px, 20px, 24px, 30px, 32px, 38px, 45px, 55px | 1, 1.2, 1.3, 1.4, 1.5, 1.6 | General Sans Variable Variable Bold — detected in extracted data but not described by AI |
| Space Mono |  | 400 | 8px | 1.3 | Space Mono — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.18 | -0.1 |
| body | 16 | 1.4 | -0.16 |
| subheading | 18 | 1.6 | -0.18 |
| heading | 32 | 1.3 | -0.64 |
| heading-lg | 45 | 1.4 | -1.35 |
| display | 55 | 1 | -2.2 |

## Spacing & Shape

```json
{
  "radius": {
    "full": "9999px",
    "tags": "4px",
    "cards": "16px",
    "buttons": "99px",
    "default": "8px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action

Filled with Ink (#1c1917) background and Canvas (#ffffff) white text, using 99px border-radius for a pill shape. Padding is 8px vertical, 20px horizontal. Uses Inter font, size 16px, weight 500.

### Ghost Button

**Role:** Secondary action

Transparent background with a subtle fill of rgba(0, 0, 0, 0.04) and Ink (#1c1917) text. Pill-shaped with 99px border-radius. Padding is 10-12px vertical, 14px horizontal.

### Text Link Button

**Role:** Tertiary action, inline link

Canvas (#ffffff) background with Ink (#1c1917) text, no border-radius (square shape). Padding is 8px vertical, 10px horizontal. Used for compact actions.

### Text Link Button (Transparent)

**Role:** Inline navigation, minimal action

Fully transparent background with Ink (#1c1917) text. Pill-shaped with 99px border-radius. Padding is 10px vertical, 15px horizontal. Used for embedded actions.

### Feature Card (Parchment)

**Role:** Informational display

Parchment (#fafaf9) background, 16px border-radius. No explicit padding or shadow, relying on content for internal spacing.

### Feature Card (Canvas)

**Role:** Prominent information display

Canvas (#ffffff) background, 16px border-radius. No explicit padding or shadow.

### Screenshot Display Card

**Role:** Visual content container

Canvas (#ffffff) background, 8px border-radius, no shadow or padding. Used for containing product screenshots or visual examples.

### Subtle Elevated Card

**Role:** Minor elevated content

Whisper Gray (#efeeed) background with 8px 8px 0px 0px border-radius. No explicit padding or shadow. Used for subtle visual separation.

## Do's

- Prioritize Ink (#1c1917) for primary headings and Canvas (#ffffff) for backgrounds to maintain a clean contrast.
- Use 99px border-radius for all interactive buttons and tags to ensure a consistent pill shape (e.g., 'Start for free').
- Apply General Sans Variable, weight 700 with aggressive negative letter-spacing for all display and large heading text.
- Utilize Parchment (#fafaf9) or Whisper Gray (#efeeed) for secondary card backgrounds, creating subtle layered surfaces.
- Maintain a clear element gap of 10px for vertical stacking of UI elements and 8px for smaller interactive elements.
- Ensure textual contrast: Ink (#1c1917) on Canvas (#ffffff) surfaces, and Canvas (#ffffff) text on Ink (#1c1917) button backgrounds.
- Reserve Sunset Orange (#fe551b) primarily for decorative accents, illustrations, or as a background wash to avoid competition with functional UI.

## Don'ts

- Avoid using Sunset Orange (#fe551b) for primary calls to action or essential text; its role is decorative accent, not functional interface element.
- Do not introduce heavy drop shadows; prefer subtle 1px shadows or no shadows to maintain the light, modern aesthetic.
- Refrain from using strong, saturated colors beyond Sunset Orange; the palette is intentionally restrained to highlight content.
- Do not deviate from the specified General Sans, Inter, Geist Mono, and system sans-serif fonts; no additional typefaces should be introduced.
- Avoid tight spacing for body text; ensure adequate line-height and letter-spacing are respected to preserve readability.
- Do not apply rounded corners to full-bleed sections or backgrounds; surfaces should adhere to the specified radii of 8px, 16px, or 99px for components.
- Do not use black #000000 for body text; reserve it for large, impactful headlines where maximum contrast is desired.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(0, 0, 0, 0.15) 0px 4px 12px 0px |
| Subtle UI Elements | rgba(0, 0, 0, 0.25) 0px 1px 2px 0px |
| Button | rgba(0, 0, 0, 0.05) 0px 1px 3px 0px, rgba(0, 0, 0, 0.05) 0px 1px 2px -1px |

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Shared emphasis on crisp, organized content, abundant whitespace, and a focus on documentation/productivity. |
| Linear | Clean, almost austere UI design, strong typographic hierarchy, and minimalist component aesthetic. |
| Vercel | Structured layouts, emphasis on technical content presentation, and subtle use of accent colors on neutral backgrounds. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #1c1917
background: #ffffff
border: #e5e5e5
accent: #fe551b
primary action: #1c1917 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #1c1917 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Design a feature card: Parchment (#fafaf9) background, 16px border-radius, elementGap 10px internally. Include a bold subheading "GitBook Agent" using Inter weight 600 at 20px, and body text below it with Inter weight 400 at 16px, color Ash (#57534d).
3. Create a ghost button for navigation: transparent background, Ink (#1c1917) text, 99px border-radius, 10px vertical padding, 15px horizontal padding. The text should be Inter weight 500 at 16px.
4. Design a small decorative info label: Sunset Orange (#fe551b) background, Canvas (#ffffff) text, 4px border-radius, using Inter weight 600 at 12px, 6px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508134668-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508134668-thumb.jpg |
