# Mr. Marcel School — Refero Style

- Refero URL: https://styles.refero.design/style/d91ae311-ba5c-461a-8895-eb0aed6585b4
- Site URL: https://mrmarcelschool.com
- ID: d91ae311-ba5c-461a-8895-eb0aed6585b4
- Theme: dark
- Industry: design
- Created: 2026-04-30T03:55:26.406Z
- Ranks: newest: 28, popular: 559, trending: 398

> Playful dark workshop

## Description

Mr. Marcel School employs a vibrant, educational workshop aesthetic, combining a primarily dark canvas with high-contrast, playful chromatic accents. The density is balanced, favoring clear separation between content blocks. Typography is confident yet friendly, set against dark surfaces with selective use of bright colors for emphasis. Components are sharp-edged, often outlined, and avoid heavy shadows, creating a lightweight, graphic feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Canvas | #242424 | neutral | Primary background for pages and default dark surfaces, text on light surfaces |
| Ivory Canvas | #ffffff | neutral | Text on dark backgrounds, secondary backgrounds for subtle contrast sections |
| Deep Black Text | #020202 | neutral | Dominant text color on light backgrounds, hairline borders |
| Soft Black Surface | #191919 | neutral | Slightly elevated card and container backgrounds on the Midnight Canvas |
| Muted Sage | #dbf3d0 | brand | Primary action backgrounds, decorative accents, and border elements |
| Pale Peach Accent | #f8c6ab | accent | Decorative borders, secondary accents, and subtle graphic elements |
| Pale Lavender | #abc1e8 | semantic | Informative elements, active navigation indicators, and decorative borders |
| Warm Beige | #eee1d3 | neutral | Neutral link defaults, subtle borders, and decorative outlines |
| Vibrant Red | #e24037 | accent | Navigation active states, attention-grabbing text highlights |
| Mellow Yellow Background | #ffe9ad | brand | Background for specific content sections and highlighted text |
| Subtle Cream Card | #fddebe | neutral | Background for specific card variants or highlighted content blocks |
| Off-White Hero Base | #fff6de | neutral | Background for the hero section, offering a soft contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Sofia Pro | Montserrat | 100, 400, 500, 600, 700, 900 | 15px, 16px, 17px, 18px, 20px, 22px, 24px, 26px, 30px, 32px, 36px, 40px, 42px, 46px, 52px, 74px | 1.00, 1.15, 1.20, 1.35, 1.40 | Primary typeface for all headings, body text, and UI elements. Its clean, geometric form provides a modern yet approachable feel. |
| Font Awesome 6 Brands |  | 400 | 24px | 1.00 | Iconography for brand and social elements across the interface. |
| fontello |  | 400 | 18px | 1.00 | Utility icon set for various UI functions. |
| Helvetica | Arial | 500 | 15px | 1.50 | Used for specific auxiliary text and button labels, providing a compact, familiar feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 15 | 1.5 | 0.007 |
| subheading | 22 | 1.35 |  |
| heading-sm | 30 | 1.35 |  |
| heading | 42 | 1.2 |  |
| display | 74 | 1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "other": "40px",
    "buttons": "50%"
  },
  "elementGap": "12px",
  "sectionGap": "24px",
  "cardPadding": "12px",
  "pageMaxWidth": "1320px"
}
```

## Components

### Ghost Circular Button

**Role:** Navigation and subtle actions

backgroundColor=rgba(0, 0, 0, 0), color=rgb(36, 36, 36) - or rgb(219, 243, 208) for inverse, borderTopColor=rgb(36, 36, 36) - or rgb(219, 243, 208) for inverse, borderRadius=50%, paddingTop=0px, paddingRight=0px, paddingBottom=0px, paddingLeft=0px. Used for subtle, circular interaction areas without a strong background focus.

### Filled Square Accent Button

**Role:** Primary call to action in dark sections

backgroundColor=rgb(36, 36, 36), color=rgb(171, 193, 232), borderTopColor=rgb(171, 193, 232), borderRadius=0px, paddingTop=8px, paddingRight=16px, paddingBottom=6px, paddingLeft=16px. A square, filled button with Pale Lavender text and border, standing out against dark backgrounds.

### Circular Icon Button

**Role:** Small, functional icons or badges

backgroundColor=rgb(36, 36, 36), color=rgb(36, 36, 36), borderTopColor=rgb(36, 36, 36), borderRadius=50%, paddingTop=0px, paddingRight=0px, paddingBottom=0px, paddingLeft=0px. Used for small, circular elements that are visually contained, often representing icons.

### Transparent Content Card

**Role:** Grouping content without strong visual borders

backgroundColor=rgba(0, 0, 0, 0), borderRadius=0px, boxShadow=none, paddingTop=0px, paddingRight=12px, paddingBottom=0px, paddingLeft=12px. Utilized for flexible content grouping where the background of the parent section defines the visual context, with subtle internal padding.

### Dark Content Card

**Role:** Prominent content blocks on dark backgrounds

backgroundColor=rgb(36, 36, 36), borderRadius=0px, boxShadow=none, paddingTop=30px, paddingRight=30px, paddingBottom=30px, paddingLeft=30px. These cards provide clear separation and elevation on the primary Midnight Canvas background.

### Circular Card

**Role:** Highlighting specific items or profile pictures

backgroundColor=rgb(36, 36, 36), borderRadius=100%, boxShadow=none, paddingTop=30px, paddingRight=30px, paddingBottom=30px, paddingLeft=30px. A distinct, large circular card for visual emphasis on individual elements.

### Hero Section Card

**Role:** Prominent content in light hero sections

backgroundColor=rgb(253, 222, 190), borderRadius=0px, boxShadow=none, paddingTop=0px, paddingRight=0px, paddingBottom=0px, paddingLeft=0px. A specific card variant with a Mellow Yellow background, used within hero areas for visual contrast.

### Ghost Badge

**Role:** Tags or categories with minimal visual weight

backgroundColor=rgba(0, 0, 0, 0), color=rgb(36, 36, 36), borderRadius=0px, paddingTop=0px, paddingRight=0px, paddingBottom=0px, paddingLeft=0px. Used for labels and tags where the text itself carries the primary emphasis, without any background fill or border.

## Do's

- Prioritize Midnight Canvas (#242424) for primary backgrounds and Soft Black Surface (#191919) for elevated elements, maintaining a dark theme.
- Use Muted Sage (#dbf3d0) for primary interactive elements and key brand accents to create visual punctuation.
- Apply a 0px border-radius for most rectangular UI elements like cards and some buttons to maintain a sharp, graphic feel.
- Utilize 50% border-radius for circular elements, such as ghost buttons or profile picture frames, for clear distinction.
- Maintain a clear visual hierarchy with Sofia Pro in various weights for headings and body text, especially the larger sizes of 52px and 74px for display text.
- Employ Pale Lavender (#abc1e8) for informational accents and active navigational items to guide user attention.
- Ensure generous padding of 30px within Dark Content Cards to provide ample breathing room around content.

## Don'ts

- Avoid applying heavy drop shadows; the system favors flat or outlined elements over dimensional ones.
- Do not use generic blue for primary action or informational states; instead, leverage Muted Sage (#dbf3d0) and Pale Lavender (#abc1e8).
- Refrain from using gradients broadly; the UI is characterized by flat colors and sharp contrasts.
- Do not introduce rounded corners arbitrarily; follow the established 0px for cards/blocks and 50% for circular elements.
- Avoid dense, information-packed sections without clear visual breaks; prioritize comfortable density for readability.
- Do not use standard system fonts when Sofia Pro or Helvetica (where specified) are designated for content.
- Do not override the distinct letter-spacing for Helvetica at 15px (0.0070em); this is a specific design choice.

## Layout

The page primarily uses a max-width contained layout of 1320px, with content centered. The hero section is often full-bleed with an off-white background and a split-screen arrangement of text Left and a large, abstract illustration Right. Section rhythm is created through alternating background colors, primarily Midnight Canvas (#242424) and Mellow Yellow Background (#ffe9ad), but without explicit dividers – sections flow seamlessly. Content arrangement frequently uses two-column layouts, often text-left/visual-right, or stacked centered blocks for features. Card grids (typically 4-column) are employed for displaying individuals or program types. Navigation is a persistent top bar, sticky on scroll, with clear brand colors for active states. The overall density is comfortable, with clear vertical spacing between content blocks.

## Imagery

The site uses a mix of playful, abstract illustrations and tightly cropped product/profile photography. Illustrations are flat, graphic, and use a limited color palette of brand colors (green, orange, blue, yellow, red on pink or off-white backgrounds). They are often geometric with clear outlines or filled shapes, adding a whimsical yet structured feel. Photography focuses on professional headshots or clean product examples, often within square or circular masked frames, lacking busy backgrounds. Icons are minimal, either outlined (Font Awesome 6 Brands, fontello) or simple filled shapes, maintaining a consistent stroke weight. Imagery primarily serves a decorative and atmospheric role in hero sections, then transitions to explanatory or social proof in content blocks, occupying significant visual space.

## Similar Brands

| Business | Why |
| --- | --- |
| AIGA | Shares a non-traditional, graphic-heavy approach to design education branding, with bold typography and abstract visual elements. |
| Future London Academy | Uses a dark background with vibrant, modern color accents and a focus on abstract, often geometric, illustrations for education. |
| Supra Supply | Exhibits a similar dark UI, strong typographic hierarchy, and a focus on sharp edges and high-contrast accent colors. |
| Hyper Island | Features a playful yet structured visual identity for creative education, incorporating various graphic elements on dark backdrops. |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference:**
text: #ffffff
background: #242424
border: #242424
accent: #f8c6ab
primary action: #dbf3d0 (filled action)

**3-5 Example Component Prompts:**
1. Create a Dark Content Card: backgroundColor #242424, borderRadius 0px, paddingTop 30px, paddingRight 30px, paddingBottom 30px, paddingLeft 30px. Place a Sofia Pro weight 700 headline at 36px, color #dbf3d0, and two lines of Sofia Pro weight 400 body text at 16px, color #ffffff.
2. Design a Ghost Circular Button: backgroundColor rgba(0, 0, 0, 0), color rgb(36, 36, 36), borderTopColor rgb(36, 36, 36), borderRadius 50%, paddingTop 0px, paddingRight 0px, paddingBottom 0px, paddingLeft 0px. Use a 'fontello' icon at 18px.
3. Create a Primary Action Button: #dbf3d0 background, #020202 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521298955-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777521298955-thumb.jpg |
