# Cursor — Refero Style

- Refero URL: https://styles.refero.design/style/4e3b4717-84c8-4599-baaf-a343c3d619b6
- Site URL: https://cursor.com
- ID: 4e3b4717-84c8-4599-baaf-a343c3d619b6
- Theme: light
- Industry: devtools
- Created: 2026-02-24T11:07:28.000Z
- Ranks: newest: 1138, popular: 2, trending: 2

> Warm ivory software studio.

## Description

Cursor's design language evokes a functional, precise studio environment, blending the tactile feel of physical tools with the clean, digital interface of modern software. A foundation of warm, off-white backgrounds (#f7f7f4) and subtle, multi-layered shadows create a sense of depth and hierarchy, mimicking stacked, floating interface elements. Typography is highly refined, utilizing custom mono and gothic fonts with precise letter-spacing and stylistic alternates that convey technical sophistication.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Parchment | #f7f7f4 | neutral | Page backgrounds, card backgrounds, neutral button backgrounds — provides a soft, warm foundation. |
| Inkwell | #262510 | neutral | Primary text, strong borders, navigation text — grounds the lighter surfaces with significant contrast. |
| Muted Stone | #7a7974 | neutral | Secondary text, subtle borders, icon fills — a mid-tone gray for less prominent information or structural lines. |
| Deep Shadow | #141414 | neutral | Deepest text variant — for maximum contrast on headlines or critical information. |
| Pebble Gray | #e6e5e0 | neutral | Hover states on neutral buttons, subtle card backgrounds — visually lighter than Canvas Parchment, indicating elevation. |
| Onyx Outline | #f54e00 | accent | Outlined action button borders and link text — a vibrant orange indicating interactive elements without a solid fill. |
| Chartreuse Alert | #4ade80 | accent | supporting accents, small interactive text snippets — a vivid green for positive or noteworthy cues, often within code examples. |
| Goldenrod Accent | #c08532 | accent | Accent for specific interactive states or icons, often found in button backgrounds for 'Build' actions. |
| Forest Green Action | #34785c | accent | Specific button backgrounds/borders like 'View PR' — a moderate green for distinct, yet secondary actions. |
| Highlight Beige | #cdcdc9 | neutral | Subtle card backgrounds on nested elements, faint border color — a light neutral for separation with low visual weight. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| CursorGothic | system-ui | 400 | 13px, 14px, 16px, 22px, 26px, 36px, 72px | 1.00, 1.10, 1.20, 1.25, 1.30, 1.43, 1.50 | Primary UI text for headlines, navigation items, and larger body copy. The custom font with precise letter-spacing and stylistic alternates ("ss09", "ss08", "tnum") creates a technically sophisticated, almost code-like feel. |
| berkeleyMono | monospace | 400, 500 | 12px, 13px | 1.21, 1.43, 1.50, 1.63, 1.67 | Code snippets, input text, and small descriptive body copy. The monospaced nature reinforces the developer tool identity. |
| Lato | sans-serif | 400, 600 | 10px, 12px, 14px, 16px | 1.10, 1.27, 1.33, 1.50 | Secondary and utility text across various components like buttons, links, and small informational sections. Its geometric sans-serif quality adds versatility. |
| EB Garamond |  | 400, 500 | 16px | 1, 1.5 | EB Garamond — detected in extracted data but not described by AI |
| -apple-system |  | 400 | 16px | 1.5 | -apple-system — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.1 | 0.06 |
| body-lg | 14 | 1.43 | 0.08 |
| heading-sm | 22 | 1.25 | -0.08 |
| heading | 26 | 1.2 | -0.35 |
| heading-lg | 36 | 1.1 | -0.45 |
| display | 72 | 1 | -2.16 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "4px",
    "buttons": "4px",
    "general": "4px",
    "prominent": "8px"
  },
  "elementGap": "8px",
  "sectionGap": "43px",
  "cardPadding": "12px",
  "pageMaxWidth": "1300px"
}
```

## Components

### CTA Button Group



### Trusted By — Brand Grid



### Cursor Agent Activity Card



### Primary Filled Button

**Role:** Interactive element

Solid Inkwell (#26251e) background, Canvas Parchment (#f7f7f4) text, 4px border-radius, with 17.5px padding on all sides. Used for primary calls to action.

### Ghost Action Button

**Role:** Interactive element

Transparent background, Inkwell (#26251e) text, 4px border-radius, with 2px vertical and 6px horizontal padding. Typically used for less prominent actions or text buttons within interfaces.

### Outlined Accent Button

**Role:** Interactive element

Transparent background, Onyx Outline (#f54e00) text and 1px border, 4px border-radius, often with 17.5px padding. Signals an important interaction without being a solid fill.

### Elevated Content Card

**Role:** Content container

Pebble Gray (#e6e5e0) background, 10px border-radius, with a multi-layered shadow: rgba(0, 0, 0, 0.14) 0px 28px 70px 0px, rgba(0, 0, 0, 0.1) 0px 14px 32px 0px, oklab(0.263084 -0.00230259 0.0124794 / 0.1) 0px 0px 0px 1px. No explicit padding mentioned in variants, implies content defines padding.

### Flat Background Card

**Role:** Content container

Canvas Parchment (#f7f7f4) background, 4px border-radius, no shadow. Padding 0px vertical and 7.5px horizontal. Used for subtle content grouping without strong visual separation.

### Text Input Field

**Role:** Form element

Transparent background, Muted Stone (#7a7974) border, Inkwell (#26251e) text, 0px border-radius, 8px horizontal and 6-8px vertical padding. Designed for content editing.

### Icon Button

**Role:** Interactive element

Transparent background with Muted Stone (#7a7974) border and text, 0px border-radius. Padding 0px on all sides, implies icon dictates clickable area not visual padding.

### Branding Card

**Role:** Informational display

Pebble Gray (#e6e5e0) background, 4px border-radius, no shadow on the card itself, but the text beneath may have a shadow. Used to display partner logos or small brand mentions.

## Do's

- Use CursorGothic for all headings and primary UI text, applying precise letter-spacing values (e.g., -0.45px at 72px, -0.08px at 22px).
- Elevate content with the multi-layered shadow token: rgba(0, 0, 0, 0.14) 0px 28px 70px 0px, rgba(0, 0, 0, 0.1) 0px 14px 32px 0px, oklab(0.263084 -0.00230259 0.0124794 / 0.1) 0px 0px 0px 1px.
- Apply Canvas Parchment (#f7f7f4) as the primary background for all major page sections and UI elements.
- Reserve Onyx Outline (#f54e00) exclusively for outlined interactive elements or prominent link text to signal primary action.
- Use 4px border-radius for most general rounded elements like cards and buttons, with 8px radius for more visually distinct components.
- Maintain a compact information density with an 8px element gap between related UI elements.
- Ensure input fields use a transparent background with Muted Stone (#7a7974) for borders, prioritizing readability of the input over strong visual containment.

## Don'ts

- Do not use solid background colors for primary call-to-action buttons; prefer bordered actions with Onyx Outline (#f54e00).
- Avoid arbitrary shadow values; adhere strictly to the defined multi-layered shadow for all elevated cards and elements.
- Never use purely achromatic grays for primary text or borders; always use Inkwell (#26251e) or Muted Stone (#7a7974).
- Do not introduce new font families or weights beyond CursorGothic (400), Lato (400, 600), and berkeleyMono (400, 500).
- Do not use the vivid accent color Onyx Outline (#f54e00) as a background fill for any component.
- Avoid large, uncontained background images; all visuals should appear within component bounds or as subtle, textural overlays.
- Do not vary letter-spacing for standard body text or inputs; only apply the specified letter-spacing values for CursorGothic headlines.

## Layout

The page adheres to a max-width of 1300px, creating a contained, spacious feel. The hero section is a split layout, featuring a prominent headline next to a contextual product screenshot, providing an immediate understanding of the tool. Content sections alternate between visually distinct blocks, often with a large left-aligned text column paired with right-aligned product imagery or stacked UI elements. A central element on the page is the responsive display of product screenshots, often overlapping, giving the impression of a live, multi-tasking interface on the screen. The overall rhythm is unhurried, with generous vertical spacing between sections, avoiding a dense, information-heavy presentation. Navigation is a simple top bar with distinct links and a primary download button.

## Imagery

The visual language for imagery is driven by product screenshots and UI examples, emphasizing the tool's functionality. These are typically contained within card-like structures, often floating with subtle shadows, and sometimes overlapping to create a dynamic, multi-windowed feel. The product screenshots themselves feature a dark UI with distinct syntax highlighting, contrasting with the light surrounding page, effectively showcasing the software environment. There is minimal photography; the focus is on UI and code. Icons are simple, monochrome, using Muted Stone (#7a7974) for fills, suggesting utility over embellishment. Density is balanced, with imagery illustrating explanations rather than dominating sections.

## Elevation

| Element | Style |
| --- | --- |
| Elevated Content Card | rgba(0, 0, 0, 0.14) 0px 28px 70px 0px, rgba(0, 0, 0, 0.1) 0px 14px 32px 0px, oklab(0.263084 -0.00230259 0.0124794 / 0.1) 0px 0px 0px 1px |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Similar focus on precise typography, subtle neutral palette, and nuanced elevation to create a sophisticated SaaS aesthetic centered on productivity. |
| Stripe | Adopts a clean, light-themed UI with strong typography and a measured use of functional accent colors, echoing Cursor's blend of professionalism and subtle branding. |
| OpenAI | Combines a light, spacious layout with restrained color application and a distinct focus on showcasing software interfaces and code, similar to Cursor's presentation of AI tools. |
| Figma | Features a light UI with carefully selected typographic choices and the use of soft neutral tones contrasted with specific brand accents, much like Cursor's approach. |

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777419771947-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777419771947-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4e3b4717-84c8-4599-baaf-a343c3d619b6-1777551922358-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4e3b4717-84c8-4599-baaf-a343c3d619b6-1777551922358-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4e3b4717-84c8-4599-baaf-a343c3d619b6-1777551922358-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/4e3b4717-84c8-4599-baaf-a343c3d619b6-1777551922358-preview-detail-poster.jpg |
