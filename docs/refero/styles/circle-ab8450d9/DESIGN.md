# Circle — Refero Style

- Refero URL: https://styles.refero.design/style/ab8450d9-1b42-4395-aa24-9e277f021aa1
- Site URL: https://www.circle.so
- ID: ab8450d9-1b42-4395-aa24-9e277f021aa1
- Theme: light
- Industry: saas
- Created: 2026-04-30T00:51:07.013Z
- Ranks: newest: 682, popular: 593, trending: 369

> Galactic UI with soft glow.

## Description

Circle utilizes a dark canvas with bright, soft UI elements to project an approachable, yet professional, digital community space. Typography is compact and precise, maintaining clarity against gradients and dark backgrounds. Components are fluid and often feature subtle shadows or blurred backdrops, giving them depth without harshness. The system leverages a rich, cool-toned gradient palette for a vibrant, modern feel, reserving pure white for interactive surfaces to highlight action.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Eclipse | #0a0a0a | neutral | Primary text, deep surface backgrounds, navigation bar text and icons |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, active input fills, essential text elements on dark backgrounds |
| Slate Border | #e4e7eb | neutral | Subtle borders, dividers, ghost button outlines, inactive input borders |
| Dark Knight | #191b1f | neutral | Secondary text, muted headings, deep accent text on light backgrounds |
| Silver Whisper | #737373 | neutral | Muted helper text, secondary navigation links, placeholder text |
| Deep Indigo | #3e1bc9 | brand | Background gradient accent, blending from bright blue to deep violet |
| Sky Burst | #408fed | brand | Background gradient starting point, contributing to the ambient glow |
| Periwinkle Mist | #e0eafc | accent | Soft button backgrounds, subtle card accents |
| Lavender Haze | #f2dbf5 | accent | Soft button backgrounds, subtle card accents, hover states for inputs |
| Peach Cream | #fff0d8 | accent | Soft button backgrounds, subtle card accents |
| Rose Blush | #ffe0e2 | accent | Soft button backgrounds, subtle card accents |
| Ocean Mint | #e4f6f4 | accent | Soft button backgrounds, subtle card accents |
| Focus Blue | #539cf2 | accent | Blue supporting accent for decorative details and low-frequency emphasis. Do not promote it to the primary CTA color |
| Crimson Alert | #ef4444 | accent | Red text accent for links, tags, and emphasized short phrases. Use as a supporting accent, not as a status color |
| Dark Crimson Alert | #b91c1c | accent | Red text accent for links, tags, and emphasized short phrases. Use as a supporting accent, not as a status color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 10px, 11px, 14px, 16px, 18px, 20px, 24px, 32px, 40px, 48px, 56px, 64px | 1.10, 1.20, 1.21, 1.25, 1.28, 1.29, 1.30, 1.33, 1.40, 1.43, 1.45, 1.50, 1.56 | The sole typeface, used across all elements from body text to large display headings. Its versatile weights and precise letter-spacing ensure compact and legible content, crucial for an information-dense UI. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.5 | 0.5 |
| body-sm | 14 | 1.43 | -0.14 |
| body | 16 | 1.5 | -0.16 |
| subheading | 20 | 1.3 | -0.42 |
| heading-sm | 24 | 1.25 | -0.58 |
| heading | 32 | 1.28 | -0.74 |
| heading-lg | 40 | 1.2 | -0.92 |
| display | 48 | 1.21 | -1.24 |
| display-lg | 56 | 1.2 | -1.45 |
| headline | 64 | 1.1 | -1.6 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "24px",
    "inputs": "9999px",
    "buttons": "9999px",
    "decorativeElements": "32px"
  },
  "elementGap": "8px",
  "sectionGap": "93px",
  "cardPadding": "20px",
  "pageMaxWidth": "1376px"
}
```

## Components

### Ghost Navigation Button

**Role:** Primary navigation and secondary actions in headers and footers.

Transparent background, text in Midnight Eclipse (#0a0a0a) against Canvas White (#ffffff) or Canvas White against a dark background. Border is solid 1px Slate Border (#e4e7eb). Padding is 14px vertical, 28px horizontal. Fully rounded with 9999px border-radius.

### Accent Filled Button

**Role:** Calls to action or categorical filters.

Background in one of the pastel Accent colors (e.g., Periwinkle Mist #e0eafc), text in Midnight Eclipse (#0a0a0a). Padding is 8px vertical, 16px horizontal. Fully rounded with 9999px border-radius. No explicit border.

### Product Feature Card

**Role:** Displaying product features or content blocks.

Background in Canvas White (#ffffff), with an 8% opacity shadow from #a9a9a9 (rgba(169, 169, 169, 0.08)) offset 0px, 4px blur 8px. Border-radius is 20px. Internal padding is 32px on all sides.

### Translucent Highlight Card

**Role:** Elevated, semi-transparent content areas within contrasting backgrounds.

Semi-transparent Canvas White background (rgba(255, 255, 255, 0.5)). Border-radius is 24px. Internal padding is 20px. No shadow is applied.

### Input Field

**Role:** Standard text input for forms.

Background in Canvas White (#ffffff), text in Midnight Eclipse (#0a0a0a). Border is 1px solid Slate Border (#e2e9e0). Fully rounded with 9999px border-radius. Left padding 24px, vertical 4px. On focus, a 2px blue ring (Focus Blue #539cf2) outlines the input.

### Category Tab Button

**Role:** Segmenting content or filtering categories within a section.

Ghost style with transparent background. Text is Midnight Eclipse (#0a0a0a) or Canvas White (#ffffff) on dark areas. No specific padding or border radius when inactive. Active state often utilizes an Accent Filled Button style.

### Dark Themed Feature Card

**Role:** Presenting features or testimonials on dark background sections.

Translucent background in rgba(255, 255, 255, 0.18). Border-radius is 20px. Internal padding is 8px. No shadow is applied.

## Do's

- Use Inter for all typography, adjusting weight and letter-spacing according to semantic role and size.
- Apply 9999px border-radius to all interactive elements like buttons and input fields for a consistent soft-edged feel.
- Reserve Canvas White (#ffffff) for primary content surfaces and interactive elements to maintain high contrast and clarity.
- Employ the Deep Indigo to Sky Burst linear gradient as a primary background for hero sections and expressive areas, creating a sense of depth.
- Use Slate Border (#e4e7eb) for subtle dividers, non-essential borders, and outlines to avoid visual clutter.
- Maintain a clear visual hierarchy with Midnight Eclipse (#0a0a0a) for primary text and Silver Whisper (#737373) for secondary/helper text.
- Use an 8px element gap for comfortable spacing between most inline and block elements to ensure readability and comfortable density.

## Don'ts

- Avoid using harsh, saturated colors as backgrounds to maintain the site's soft, futuristic aesthetic.
- Do not deviate from the Inter typeface; alternative fonts will disrupt the precise typographic harmony.
- Do not use square or sharp-cornered elements; all significant UI components should leverage the established border-radius values.
- Refrain from heavy, opaque shadows; utilize the transparent, diffused rgba(169, 169, 169, 0.08) 0px 4px 8px 0px for subtle elevation.
- Do not introduce new primary action colors; the design system favors accent-tinted light buttons for calls to action.
- Avoid excessive spacing or overly wide line lengths; keep text compact and content focused on the 1376px max-width constraint.
- Do not use plain solid backgrounds for large content blocks where a gradient or blurred backdrop could provide more visual interest and depth.

## Layout

The page primarily uses a max-width contained layout of 1376px, centered on the screen. The hero section is full-bleed, leveraging a dark, gradient background with a centered, prominent headline and a Call to Action block. Sections below often alternate between light (#ffffff) and darker gradient or tinted backgrounds, creating a clear vertical rhythm with consistent ~93px section gaps. Content is arranged using flexible column grids, commonly alternating text-left/image-right patterns, centered stacked content blocks, and 3-column card grids for features. The navigation is a sticky top bar, minimal and semi-transparent, evolving to a solid background on scroll.

## Imagery

The site favors illustrative, abstract graphics with soft glows and gradients, particularly in hero sections and background patterns. Product screenshots are clean, showcasing UI within contained, slightly rounded frames, often with a subtle shadow or translucent background. Photography, when used, tends to be professional portraits of individuals (e.g., testimonials) presented similarly to cards. Icons are typically outlined or filled, maintaining a consistent stroke weight, and monochrome to integrate seamlessly with the minimal UI.

## Elevation

| Element | Style |
| --- | --- |
| Card | rgba(169, 169, 169, 0.08) 0px 4px 8px 0px |
| Input Focus Ring | rgb(83, 156, 242) 0px 0px 0px 2px |

## Similar Brands

| Business | Why |
| --- | --- |
| Discord | Shares a modern, dark-mode aesthetic with vibrant accent colors on UI elements and soft, rounded component styles. |
| Notion | Employs a clean, minimalist canvas for content with clear typographic hierarchy and subtle interactive states. |
| Gumroad | Combines a dark header/background with light, card-based content sections, and uses soft, rounded buttons. |
| Linear | Features a disciplined, compact UI with precise typography, subtle borders, and a focus on functionality within a spacious layout. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0a0a0a
background: #ffffff
border: #e4e7eb
accent: #e0eafc
primary action: #f2dbf5 (filled action)

Example Component Prompts:
Create a hero section with a centered headline: Background with Deep Indigo to Sky Burst gradient. Headline 'The complete community platform' at 56px Inter weight 700, Canvas White text, letter-spacing -1.45px. Subtext 'Build a home for your community...' at 18px Inter weight 400, Canvas White text, letter-spacing -0.16px. Follow with an email input field and an Accent Filled Button 'Start for free' with Periwinkle Mist background (#e0eafc), Midnight Eclipse text (#0a0a0a), 9999px radius, 8px vertical, 16px horizontal padding.

Create a Product Feature Card: Background Canvas White (#ffffff), box-shadow rgba(169, 169, 169, 0.08) 0px 4px 8px 0px, 20px border-radius. Internal padding 32px. Place a subheading in Midnight Eclipse (#0a0a0a) 24px Inter weight 600, letter-spacing -0.58px, and body text in Silver Whisper (#737373) 16px Inter weight 400, letter-spacing -0.16px.

Create a Ghost Navigation Button: Transparent background. Text 'Product' in Midnight Eclipse (#0a0a0a) when on white background or Canvas White (#ffffff) on dark. 1px solid Slate Border (#e4e7eb) when outlined. 14px vertical, 28px horizontal padding. Fully rounded 9999px border-radius.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510219142-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510219142-thumb.jpg |
