# Eight Sleep — Refero Style

- Refero URL: https://styles.refero.design/style/e4e8fe86-47ed-4ddd-a6c6-2c28eae9aabe
- Site URL: https://eightsleep.com
- ID: e4e8fe86-47ed-4ddd-a6c6-2c28eae9aabe
- Theme: dark
- Industry: other
- Created: 2026-02-19T16:28:01.000Z
- Ranks: newest: 1158, popular: 397, trending: 1001

> Midnight Command Center // A dark, immersive interface with pin-prick bright accents, like illuminated controls in a premium device.

## Description

Eight Sleep's design evokes a sense of sophisticated, premium technology, akin to a high-end personal device, through its dominant dark surfaces and stark monochromatic palette. The experience is primarily dark, using a deep #121212 background, sharply contrasted by bright white typography and subtle gray accents. A singular vivid violet (#4158ee) serves as the primary accent, appearing sparingly on interactive elements to create precise visual cues without becoming distracting. The design prioritizes visual clarity and focused attention on product features, employing carefully structured dark surfaces rather than relying on heavy shadows or complex color schemes.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #121212 | neutral | Primary page background, elevated surfaces, deep section backgrounds — sets a premium, immersive mood. |
| Porcelain White | #FFFFFF | neutral | Primary text color on dark backgrounds, interactive elements, button backgrounds – provides crisp contrast and highlights key information. |
| Silver Thread | #808080 | neutral | Secondary text, subtle borders, inactive states — provides visual hierarchy without harsh contrast. |
| Ash Gray | #8e8d92 | neutral | Desaturated text on dark backgrounds, secondary icons, subtle highlights. |
| Graphite | #363636 | neutral | Darker accent text, subtle borders, internal component divisions. |
| Winter Frost | #F9F8F7 | neutral | Light background for specific sections or cards within a dark theme to create subtle distinction. |
| Ghost Gray | #F1F2F4 | neutral | Subtle background for UI elements like selected options in a pop-up. |
| Electric Violet | #4158EE | accent | Primary interactive accent color for links, active states, and calls to action — provides a focused, high-tech glow against dark surfaces. |
| Sky Blue | #1862FF | accent | Secondary accent for interactive elements or specific highlighted text — shares the energetic quality of Electric Violet. |
| Nightfall Gradient | #1B263B | brand | Background for hero sections, creating a deep, enveloping atmosphere. |
| Ocean Blue | #3f5975 | brand | Subtle background on interactive elements, like selected regions in a modal. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| NeueMontreal | Inter | 300, 400, 500, 700 | 10px, 12px, 14px, 15px, 16px, 17px, 18px, 20px, 22px, 28px, 36px, 44px, 56px, 64px, 115px | 0.94, 1.00, 1.09, 1.10, 1.20, 1.27, 1.31, 1.33, 1.40, 1.50, 1.70, 1.92 | Used universally across all text elements from headings to body, links, and buttons. The diverse weights and fine-tuned letter spacing allow for nuanced expression, particularly the subtle negative spacing at large sizes which keeps headlines feeling grounded despite their scale. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.4 | 0.01 |
| body | 16 | 1.5 | 0.125 |
| subheading | 18 | 1.5 | 0.001 |
| heading-sm | 28 | 1.27 | 0.143 |
| heading | 36 | 1.2 | 0.004 |
| heading-lg | 44 | 1.1 | -0.02 |
| display | 64 | 0.94 | -0.02 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "chips": "9999px",
    "inputs": "0px",
    "buttons": "4px",
    "default": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "",
  "pageMaxWidth": null
}
```

## Components

### Region Selector Modal



### Sleep Challenge Quiz Panel



### Announcement Banner + CTA Buttons



### Ghost Navigation Link

**Role:** Primary navigation, secondary CTAs

Transparent background, 'Porcelain White' text, 2px bottom padding, font NeueMontreal weight 400, 16px text, line height 1.5. No border default.

### Primary Navigation Product Link

**Role:** Top-level navigation items

Transparent background, 'Porcelain White' text, NeueMontreal 16px, weight 400, 2px top/bottom padding.

### Primary CTA Button

**Role:** Main call to action

Solid 'Porcelain White' background, 'Midnight Ink' text, NeueMontreal 16px, weight 500. Border radius 4px. Padding 15px top/bottom, 24px left/right.

### Footer Link

**Role:** Informational links in footer

Transparent background, 'Silver Thread' text, NeueMontreal 14px, weight 400. No border. Subtle hover effects are implied but not explicitly defined in provided data.

### Region Selection Card (Modal)

**Role:** Interactive list item in a modal

Transparent background, 'Porcelain White' text, NeueMontreal 16px, weight 400. No box shadow or border by default. On selection, background becomes 'Ocean Blue' (#3f5975).

### Modal Input Field

**Role:** Single-line text input

Transparent background, 'Porcelain White' text and border, NeueMontreal 16px, weight 400. No border radius. Bottom border style 'solid' 1px 'Porcelain White'.

### Carousel Navigation Dot

**Role:** Pagination for image carousels or feature sliders

Circular shape (50% border-radius), transparent background, uses 'Ash Gray' (#8e8d92) for inactive states, 'Electric Violet' (#4158EE) for active. No shadow.

### Quiz Selection Button

**Role:** Interactive options within a quiz or survey

Background 'Ghost Gray' (#F1F2F4), 'Midnight Ink' text, NeueMontreal 16px, weight 400. Border radius 4px. Padding 15px top/bottom, 24px left/right. The example shows these with no border.

### Feature Highlight Card

**Role:** Displays key product features or benefits

Background 'Winter Frost' (#F9F8F7), 'Midnight Ink' text. Border-radius 12px. No explicit padding or shadow in the provided data.

## Do's

- Use 'Midnight Ink' (#121212) as the default background for all primary page sections and modals to maintain the dark theme.
- Prioritize 'Porcelain White' (#FFFFFF) for all body text, headings, and primary interactive elements on dark backgrounds to ensure high contrast.
- Apply 'Electric Violet' (#4158EE) exclusively to key interactive elements like links, buttons, and active states to guide user focus.
- Employ NeueMontreal weight 300 for display-sized headings (e.g., 64px, 115px) to achieve a sophisticated, whisper-like authority.
- Utilize a 4px border-radius for all primary buttons and interactive inputs, and 12px for cards to establish a consistent shape language.
- Maintain generous vertical spacing with `sectionGap` at `64px` and component element spacing with `elementGap` at `16px`.
- Use text links that appear as 'Porcelain White' on dark backgrounds or 'Midnight Ink' on light backgrounds for standard interactions, reserving 'Electric Violet' for emphasis.

## Don'ts

- Avoid using multiple vibrant colors; restrict accent colors primarily to 'Electric Violet' (`#4158EE`) and its close variant 'Sky Blue' (`#1862FF`).
- Do not use box shadows for general elevation; rely on background color changes or subtle outlines to indicate depth.
- Do not use aggressive, heavy typography weights like 700 for large headings; the brand emphasizes subtlety through lighter weights.
- Avoid circular or aggressively rounded elements other than specific small icons or carousel indicators (9999px radius).
- Do not deviate from the NeueMontreal font family; it is central to the visual identity.
- Do not use generic gray tones for primary text on dark backgrounds; always use 'Porcelain White' for high readability.

## Layout

The overarching layout is full-bleed, particularly for hero sections and dark backgrounds, providing an expansive, immersive feel. Content is primarily centered or arranged in a two-column text-left/image-right or image-left/text-right alternating pattern. The hero section often features a large, centered headline over a dark background (sometimes with a gradient), immediately establishing the product's value proposition. Sections maintain a consistent vertical rhythm, with generous `64px` gaps between major content blocks. There are instances of multi-column card grids for features, typically 3 columns. The navigation is a sticky top bar, minimal, with right-aligned utility links and a primary CTA, keeping the focus on the main content area.

## Imagery

Imagery primarily features product shots and lifestyle photography. Product shots include tightly cropped, pristine images of the 'Pod' device, often on a neutral background or integrated into a clean bedroom aesthetic. Lifestyle photography is staged, showcasing individuals interacting with the product in a visually appealing, aspirational bedroom setting, focusing on comfort and technology. Images are generally contained, not full-bleed, with sharp rectangular edges. There is a strong emphasis on the product's integration into sophisticated domestic environments. Icons are monochrome, often using 'Ash Gray' or 'Porcelain White', with simple, clean outlines or fills.

## Elevation

| Element | Style |
| --- | --- |
| Card/Modal | box-shadow: rgba(0, 0, 0, 0.05) 2px 2px 12px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Apple | Shares a use of high-contrast black and white, subtle material changes for depth, and limited, precise color accents. |
| Oura Ring | Similar focus on premium, minimalist product presentation, dominant dark themes, and a single vibrant accent color. |
| Nest | Employs an aesthetic of refined technology for the home, with clean typography and a muted, tech-forward color palette. |
| Whoop | Utilizes dark UI, strong typography, and limited color to emphasize data and performance, similar to a high-end personal device interface. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- **Text (on dark):** #FFFFFF
- **Background (primary):** #121212
- **CTA Accent:** #4158EE
- **Border (subtle):** #808080
- **Card Background (light):** #F9F8F7

### 3-5 Example Component Prompts
1. **Create a hero section:** Full-bleed `Midnight Ink` background with `Nightfall Gradient` subtly overlayed. Centered headline 'Un descanso profundo. Que se adapta a ti.' in `Porcelain White`, NeueMontreal 64px, weight 300, letter-spacing -0.0200em. Below, a `Primary CTA Button` saying 'Conoce el Pod'.
2. **Generate a 'Quiz Selection Button':** Text 'Tengo calor o frío' in `Midnight Ink`, NeueMontreal 16px, weight 400. Background `Ghost Gray` (#F1F2F4), border-radius 4px. Padding 15px vertical, 24px horizontal.
3. **Design a navigation bar:** `Midnight Ink` (#121212) background. Left-aligned brand logo (image placeholder). Right-aligned `Ghost Navigation Links` for 'Cómo funciona el Pod', 'Accesorios', and 'Reseñas'. A `Primary Navigation Product Link` for 'Compra el Pod' in `Porcelain White`.
4. **Create a card for product features:** Background `Winter Frost` (#F9F8F7), border-radius 12px. Headline 'Pruébalo durante 30 noches, sin riesgos' in `Midnight Ink`, NeueMontreal 28px, weight 500, line-height 1.27. Below, supporting text in `Midnight Ink`, NeueMontreal 16px, weight 400.
5. **Build a Region Selection Card in a modal:** Background `Midnight Ink` (#121212). List item background `Ocean Blue` (#3f5975) for a selected 'Spain - Español' option. Other options use transparent background. All text `Porcelain White`, NeueMontreal 16px, weight 400. Padding 15x vertical, 24x horiztonal.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924955562-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924955562-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e4e8fe86-47ed-4ddd-a6c6-2c28eae9aabe-1777561247700-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e4e8fe86-47ed-4ddd-a6c6-2c28eae9aabe-1777561247700-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e4e8fe86-47ed-4ddd-a6c6-2c28eae9aabe-1777561247700-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e4e8fe86-47ed-4ddd-a6c6-2c28eae9aabe-1777561247700-preview-detail-poster.jpg |
