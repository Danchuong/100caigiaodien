# Panic — Refero Style

- Refero URL: https://styles.refero.design/style/14db6c48-712a-4f2b-91ab-efe57d638db3
- Site URL: https://nova.app
- ID: 14db6c48-712a-4f2b-91ab-efe57d638db3
- Theme: dark
- Industry: devtools
- Created: 2026-04-30T03:42:56.932Z
- Ranks: newest: 86, popular: 1287, trending: 1317

> Cosmic Developer Console — a dark, galaxy-themed environment where vibrant digital signals glow.

## Description

Nova embraces a dark, cosmic developer UI, grounding vivid neon accents against a deep, starry background. Typography is compact and functional, prioritizing clear information display within restrained layouts. Interactive elements punctuate the dark canvas with bright blues, greens, and a spectrum of saturated hues for status indicators or feature highlights, creating a focused, high-contrast experience.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Nova Black | #080f24 | neutral | Page background, surface backgrounds, dark text on light elements, outlining ghost buttons |
| Cloud White | #ffffff | neutral | Primary text on dark backgrounds, icon fills, primary borders |
| Button Gray | #f2f2f2 | neutral | Default filled button background, primary surface for interactive elements on hover |
| Subtle Gray | #878787 | neutral | Muted text, secondary navigation, subtle button backgrounds |
| Nova Pink | #ff0043 | brand | Brand accent in logo, key headlines, and active state indicators — injects urgency |
| Sky Blue | #008fff | accent | Blue outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |
| Terminal Green | #0efe06 | accent | Green accent for outlined action borders, linked labels, and lightweight interactive emphasis. |
| Vivid Violet | #fa05b2 | accent | Decorative highlights, feature callouts, secondary accents |
| Alert Red | #ff0010 | accent | Red outline accent for tags, dividers, and focused UI edges. Use as a supporting accent, not as a status color |
| Sunset Orange | #ff6000 | accent | Orange outline accent for tags, dividers, and focused UI edges. |
| Marigold Gold | #fe9405 | accent | Orange outline accent for tags, dividers, and focused UI edges. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Hellix | system-ui | 400, 600, 700 | 13px, 18px, 21px, 26px, 29px, 30px, 31px, 35px, 46px, 62px, 83px, 208px | 0.90, 1.00, 1.20, 1.40 | The primary typeface for all text content. Its compact nature and varied weights support both minimalist headlines and clear body text, maintaining legibility against a dark background. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.4 |  |
| body | 18 | 1.4 |  |
| subheading-sm | 21 | 1.4 |  |
| subheading | 26 | 1.4 |  |
| heading-sm | 35 | 1.2 | -0.015 |
| heading | 46 | 1.2 | -0.035 |
| heading-lg | 62 | 1 | -0.05 |
| display | 208 | 0.9 | -0.333 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "9px",
    "buttons": "5px",
    "navigation": "20.62px"
  },
  "elementGap": "18px",
  "sectionGap": "40px",
  "cardPadding": "18px",
  "pageMaxWidth": null
}
```

## Components

### Solid Primary Button

**Role:** Main call-to-action, high prominence.

Background: Nova Black (#080f24), Text: Cloud White (#ffffff), Padding: 18px vertical, 26px horizontal, Border Radius: 5px.

### Ghost Accent Button

**Role:** Secondary action or download links.

Background: Button Gray (#f2f2f2), Text: Nova Black (#080f24), Padding: 17.5px vertical, 17.5px horizontal, Border Radius: 5px. This uses the default light button treatment against the dark page as a secondary CTA, giving visual contrast rather than a filled brand color.

### Circular Icon Button

**Role:** Small, interactive icons or mini-buttons with illustrative elements.

Background: Subtle Gray (#878787), Text: Nova Black (#080f24), Padding: 20px all around, Border Radius: 100% (circular).

### Navigation Link

**Role:** Top navigation items.

Text: Cloud White (#ffffff), Hover text: Subtle Gray (#878787), Hover background: Terminal Green (#0efe06) for 'Buy Now', otherwise no background change. Margin 5px right and left.

### Feature Card

**Role:** Showcasing product features with icons and descriptive text.

Padding: 18px at top/bottom. Likely uses a subtle background color like Nova Black or similar with Cloud White text. Border radius 9px, no visible shadow.

### Section Separator

**Role:** Visual divider between content sections.

Horizontal rule with 3px solid white (#ffffff) border, indicating a crisp break in content flow.

## Do's

- Prioritize Cloud White (#ffffff) text on Nova Black (#080f24) backgrounds for primary content.
- Use Nova Pink (#ff0043) for brand accents and key headlines like 'Nova ®'.
- Apply Sky Blue (#008fff) or Terminal Green (#0efe06) for primary interactive elements, such as download buttons or 'Buy Now'.
- Maintain a compact typographical scale with Hellix, utilizing the distinct letter-spacing for larger headlines: -0.05em at 62px.
- Ensure all buttons have a 5px border-radius.
- Use 18px as the default element and card padding to maintain spaciousness in the dark UI.
- Define section boundaries with a 3px solid Cloud White (#ffffff) line.

## Don'ts

- Avoid using multiple chromatic colors in close proximity that are not part of a deliberate accent spectrum.
- Do not introduce light backgrounds beyond Button Gray (#f2f2f2) or Cloud White (#ffffff) for specific UI elements, as the theme is predominantly dark.
- Refrain from using heavily decorative fonts; Hellix provides the required functionality and aesthetic.
- Do not deviate from the established button radii of 5px; larger or smaller radii will conflict with the precise aesthetic.
- Avoid excessive use of shadows or gradients; the design leans into flat surfaces with vibrant color accents.
- Do not use generic blue (#0000ee) for links; use either Sky Blue (#008fff) or rely on Cloud White (#ffffff) with an underline.
- Avoid letter spacing changes for body text; apply tracking only to larger headline sizes as specified.

## Layout

The page primarily uses a full-bleed structure against a dark, cosmic background, with content centered. The hero section features a large, centered headline over the background. Subsequent sections often alternate between text-dominant blocks and paired text-left/image-right (or vice-versa) layouts. A consistent vertical rhythm is maintained with visual separators (3px white line) between major content blocks. Navigation is a sticky top bar with minimal links and a prominent 'Buy Now' button. Feature lists often use multi-column card grids.

## Imagery

The visual language combines abstract, cosmic background imagery with starkly contrasting, detailed 3D product illustrations. Photography is absent. Icons are typically filled, monochrome (white), or occasionally brand-colored. Product screenshots are contained within device mockups (Mac windows) with code highlighting. Imagery serves a decorative, atmospheric, and explanatory role, providing visual context to features without distracting from the UI. Density is balanced, with imagery often confined to dedicated sections or illustrative accents rather than being full-bleed throughout text-heavy areas.

## Similar Brands

| Business | Why |
| --- | --- |
| VS Code | Dark-mode UI, code-editor focused, functional layout, and a subtle use of accent colors for syntax highlighting/status. |
| Sublime Text | Minimalist black UI, high-contrast text, and a developer-centric aesthetic. |
| GitHub (dark mode) | Deep dark backgrounds, vivid accent colors for interactive elements/links, and clear, structured content presentation. |
| Linear | Minimal aesthetic, high contrast, compact typography, and judicious use of accent colors to denote states or actions in a dark theme. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #ffffff
background: #080f24
border: #ffffff
accent: #008fff
primary action: #f2f2f2 (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #f2f2f2 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a navigation bar item for 'Buy Now': Hellix 18px, text #ffffff, background #0efe06, 5px border-radius, 18px vertical padding, 26px horizontal padding. Include an icon (e.g., a star) in white #ffffff.
3. Create a feature card titled 'Useful tools': Hellix 26px, #ffffff, with a descriptive body text in Hellix 18px, #ffffff. Use a card background of Nova Black #080f24, 9px border-radius, and 18px padding. Above the heading, include an icon (e.g., a hammer) rendered in a monochromatic style.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520554128-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777520554128-thumb.jpg |
