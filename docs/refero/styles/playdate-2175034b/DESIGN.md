# Playdate — Refero Style

- Refero URL: https://styles.refero.design/style/2175034b-96d7-417e-886f-ff5a4d8551ae
- Site URL: https://play.date
- ID: 2175034b-96d7-417e-886f-ff5a4d8551ae
- Theme: mixed
- Industry: other
- Created: 2026-02-01T09:33:00.000Z
- Ranks: newest: 1245, popular: 118, trending: 103

> Lemon Drop Arcade. Bright, blocky, and instantly recognizable, like a classic handheld console that makes a statement.

## Description

This design system is a cheerful, high-contrast playground. It marries a distinctive vivid yellow with deep, grounded neutrals and a playful violet, creating an energetic yet sturdy aesthetic. The use of a single, custom typeface (Roobert) across all textual elements unifies the brand's voice, while varied weights and sizes carve out hierarchy. The system intentionally avoids complex shadows and layers, favoring bold color blocks and a crisp, almost physical, presentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Playdate Yellow | #ffc500 | brand | Primary brand color, highlights, accents, and section backgrounds — a distinctively vivid and playful yellow that defines the brand. |
| Crank Violet | #7700ff | brand | Key interactive elements like CTA buttons and active navigation links — a vivid violet provides a playful yet authoritative call to action. |
| Seafoam Teal | #21c6a9 | accent | An additional accent color, used sparingly, possibly for status indicators or secondary highlights. |
| Deep Teal | #127866 | accent | Darker variant of Seafoam Teal, likely for subtle accents or text on lighter backgrounds. |
| Charcoal Text | #312f27 | neutral | Primary text color and darker element backgrounds — a very dark, slightly desaturated near-black that grounds the vibrant brand colors. |
| Pure White | #ffffff | neutral | Backgrounds, inverse text, and contrast elements — providing stark contrast to Charcoal Text and Playdate Yellow. |
| Midnight Absolute | #000000 | neutral | Shadows, outlines, and occasionally bold text — its pure black presence adds weight and definition. |
| Default Gray | #788086 | neutral | Subtle background tones or secondary text. |
| Paper White | #efefef | neutral | Input field backgrounds and subtle borders — a very light, almost white gray. |
| Ink Wash | #212223 | neutral | Darker backgrounds, similar to Charcoal Text but slightly cooler. |
| Parchment | #e9e4d9 | neutral | Input field borders and light backgrounds — a warm, off-white neutral. |
| Stone Gray | #b1afa7 | neutral | Secondary text and borders — a mid-tone neutral, providing visual breathing room. |
| Order Now Gradient | #9400ff | brand | Specific call-to-action button background, adding a subtle depth to the dominant violet. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roobert | system-ui, sans-serif | 400, 700, 800 | 19px, 21px, 22px, 24px, 29px, 33px, 34px, 40px, 51px, 57px, 68px | 1.00, 1.10, 1.20, 1.30, 2.00 | Primary typeface for all content – headings, body, links, buttons. Its geometric, slightly condensed form, particularly at varied line heights and with a subtle negative letter spacing, contributes to the brand's distinctive, playful yet sharp voice. The use of a single font family simplifies the visual language. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 19 | 1.3 | -0.48 |
| subheading | 21 | 1.2 | -0.48 |
| heading | 29 | 1.2 | -0.48 |
| heading-lg | 40 | 1.1 | -0.48 |
| display | 68 | 1 | -0.48 |

## Spacing & Shape

```json
{
  "radius": {
    "nav": "21.945px",
    "pill": "152.19px",
    "cards": "0px",
    "input": "6px",
    "buttons": "6px"
  },
  "elementGap": "3-19px",
  "sectionGap": "68px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Pill CTA Button Group



### Game Season Info Card



### Game Grid Preview



### Pill CTA Button (Violet Gradient)

**Role:** Primary call to action

Rounded pill shape with `Order Now Gradient` background, `Pure White` text, `Pure White` top border for highlight, and extreme `152.19px` border radius. Padding `5.073px` top, `15.219px` bottom, `25.365px` horizontal. Text `Roobert` weight `700`.

### Basic Button (White)

**Role:** Secondary action or general button

`Pure White` background with `Midnight Absolute` text, `Midnight Absolute` top border to define, `10px` border radius. Padding `10px` vertical, `15px` horizontal. Text `Roobert` weight `400`.

### Wait! Button (Playdate Yellow)

**Role:** Informational or subtle action button

`Playdate Yellow` background with `Charcoal Text`, `Charcoal Text` top border, `6px` border radius. Padding `4.275px` top, `7.125px` bottom, `28.5px` horizontal. Text `Roobert` weight `400`.

### Input Field

**Role:** User data entry

`Paper White` background with `Charcoal Text`, `Parchment` border, `6px` border radius. Padding `14.25px` all sides. Placeholder text is `Charcoal Text`.

### Feature Card (Image Grid)

**Role:** Displays game titles or features in a grid

Transparent background `rgba(0, 0, 0, 0)`, `0px` border radius, no shadow. Padding `0px`.

### Small Feature Card (Rounded Image Grid)

**Role:** Displays smaller game titles or features in a grid with subtle rounding

Transparent background `rgba(0, 0, 0, 0)`, `2.85px` border radius, no shadow. Padding `0px`.

### Navigation Link

**Role:** Top navigation item

Text in `Pure White` (unhovered) or `Crank Violet` (active/hovered), `Roobert` font, typically `19px` or `21px` weight `700` or `800`. Minimal padding `10px` horizontal.

## Do's

- Prioritize `Roobert` font for all text elements; variations in weight and size, not font family, should create hierarchy.
- Use `Playdate Yellow` (#ffc500) for section backgrounds and major highlights to emphasize key content.
- Employ `Crank Violet` (#7700ff) or its gradient variant for primary call-to-action buttons to ensure high visibility and playful urgency.
- Maintain high contrast pairings like `Charcoal Text` (#312f27) on `Pure White` (#ffffff) or `Playdate Yellow` for optimal readability.
- Apply `152.19px` radius for primary CTA buttons to achieve the signature pill shape; use `6px` for general buttons and input fields.
- Utilize `3px` and `11px` as the core `elementGap` values for consistent vertical rhythm and spacing between small elements.
- In sections with neutral backgrounds, use `Charcoal Text` (#312f27) for headings and `Pure White` (#ffffff) for subtle highlights on interactive elements.

## Don'ts

- Avoid introducing additional font families; `Roobert` is the sole typographic voice.
- Refrain from using complex `box-shadow` effects; the design relies on direct color blocking and shape for visual depth.
- Do not deviate from the core color palette; unexpected hues will clash with the brand's vivid but defined identity.
- Do not use generic button shapes; prefer `152.19px` (pill) or `6px` radius for specific button types.
- Avoid overly tight vertical spacing; ensure a `68px` `sectionGap` between major content blocks to provide breathing room.
- Do not use `Midnight Absolute` (#000000) for body text; reserve it for outlines, shadows, or very bold statements, preferring `Charcoal Text` (#312f27) for readability.

## Layout

The site uses a primarily full-bleed layout alternating with sections contained within a maximum width. The hero section is full-width with a dramatic, centrally placed 3D product render. Subsequent sections alternate between full-bleed `Playdate Yellow` background blocks and sections with `Default Gray` or `Charcoal Text` backgrounds that often contain text and image elements. Content is generally centered within its allocated width, with clear vertical spacing between major sections. A prominent 3-column game grid showcases visual content, with each item clearly isolated. Navigation features a sticky top bar, while the footer is a more traditional multi-column link structure.

## Imagery

The site uses a mix of high-quality product photography (dominant), custom illustrations, and game screenshots. Product shots are typically clean, well-lit, and focus on the device itself against neutral or brand-colored backgrounds. The Playdate device is often rendered in 3D, showcasing its form and features, sometimes with a subtle shadow but no complex environment. Illustrations are stylized, often black-and-white or limited-palette, evoking a retro-console aesthetic for game previews. Game screenshots are presented as compact, self-contained units with a consistent border. The overall role is to showcase the product's unique design and the distinct visual style of its game library, rather than abstract concepts or lifestyle.

## Similar Brands

| Business | Why |
| --- | --- |
| Teenage Engineering | Shares a similar playful, minimalist hardware product aesthetic and bold, blocky typography. |
| Panic (parent company) | Maintains design consistency with other Panic products, often featuring custom, unique typefaces and strong graphic identities. |
| Nintendo (classic era) | Evokes a sense of retro-gaming nostalgia with bright colors and distinct hardware, reminiscent of classic handhelds. |
| Monzo Bank | Uses a similar strategy of a signature bright accent color (hot coral) against a largely neutral background to create a distinct brand. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text: #312f27
- Background (light): #ffffff
- Background (dark): #312f27
- CTA: #7700ff
- Accent: #ffc500
- Border: #e9e4d9

Example Component Prompts:
- Create a primary Call-to-Action button: 'Order now for $229.', using 'Order Now Gradient' for background, 'Pure White' for text, 'Pure White' top border, `152.19px` borderRadius, `Roobert` font weight `700`, padding `5.073px 25.365px 15.219px 25.365px`.
- Generate a section heading: 'The System.', using `Charcoal Text`, `Roobert` font, size `40px`, weight `800`, lineHeight `1.1`, letterSpacing `-0.0070em`.
- Design a text input field: 'Enter your email', with `Paper White` background, `Charcoal Text` placeholder, `Parchment` border, `6px` borderRadius, padding `14.25px` on all sides.
- Create a footer navigation link: 'Catalog', using `Pure White` text, `Roobert` font, size `19px`, weight `700`.
- Produce a game preview card: An image placeholder with 'Casual Birder' text, transparent background `rgba(0, 0, 0, 0)`, `2.85px` borderRadius, no boxShadow, and `0px` padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924963599-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775924963599-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2175034b-96d7-417e-886f-ff5a4d8551ae-1777582486518-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2175034b-96d7-417e-886f-ff5a4d8551ae-1777582486518-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2175034b-96d7-417e-886f-ff5a4d8551ae-1777582486518-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/2175034b-96d7-417e-886f-ff5a4d8551ae-1777582486518-preview-detail-poster.jpg |
