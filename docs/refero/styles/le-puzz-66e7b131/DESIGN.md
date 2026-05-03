# Le Puzz — Refero Style

- Refero URL: https://styles.refero.design/style/66e7b131-d68c-4751-954c-f5d0d8869647
- Site URL: https://lepuzz.com
- ID: 66e7b131-d68c-4751-954c-f5d0d8869647
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T02:50:48.759Z
- Ranks: newest: 282, popular: 1160, trending: 1152

> Playful Pop-Art Canvas

## Description

Le Puzz employs a vibrant, playful, and slightly retro aesthetic, using a high-contrast palette dominated by a luminous yellow and stark black and white. The layout is structured yet whimsical, featuring a distinctive mix of classic serif and modern sans-serif typography, often in all-caps, that gives a friendly, almost shouty, character. Surfaces are largely flat and unadorned, relying on the bold color blocks and strong typographic treatments to convey energy and direct attention. Sharp outlines and contained shapes are preferred over soft shadows or gradients.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Sunshine Yellow | #ffd931 | brand | Primary brand accent, button backgrounds, interactive elements, header and footer backgrounds — creates a cheerful, energetic foundation that makes UI elements pop |
| Midnight Ink | #231f20 | neutral | Primary text, deep neutral accents, button text, icon fills — a strong, graphic dark almost-black that offers high contrast against the yellow |
| Coal Black | #000000 | neutral | Neutral form states, badge text, and quiet UI feedback where color should stay understated. Do not promote it to the primary CTA color |
| Soft Stone | #c8cbcd | neutral | Page backgrounds, subtle dividing lines — a light, cool gray providing a neutral canvas that allows other colors to stand out |
| Badge Gray | #a6a8aa | neutral | Informational badges, muted UI components — a medium gray for secondary status indicators |
| Whisper White | #d6d6d6 | neutral | Hairline borders, subtle background tints — a very light gray for minimal separation |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Times New Roman | Times | 400 | 16px | 1.15 | Primary body text, informational snippets, general content where traditional readability is key. Its classic serif form provides a contrast to the brand's playful nature. |
| Helvetica Neue | Arial | 100, 400 | 11px | 1.15, 2.27 | Compact labels, badges, and smaller interactive elements. The narrow letter spacing keeps text dense and contained. |
| Helvetica | Arial | 100, 300, 400 | 11px, 13px, 14px, 16px, 40px | 0.90, 1.15, 1.38, 1.56, 2.63 | Navigational elements, subheadings, and larger display text. The varied weights and tracking give flexibility for hierarchical emphasis, especially the wider tracking on larger sizes for a more airy feel. |
| Times Now | Times New Roman | 100, 400 | 16px, 23px, 27px, 47px | 0.87, 0.90, 1.15, 1.56, 1.93 | Decorative headlines and attention-grabbing statements. The low line-height and often all-caps styling create a dense, impactful visual block that feels 'funky' and distinctive, especially at larger sizes like 47px. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.15 | 0.073 |
| body | 16 | 1.15 |  |
| subheading | 23 | 1.15 |  |
| heading | 27 | 0.9 |  |
| display | 47 | 0.87 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "0px",
    "badges": "10px",
    "images": "0px",
    "buttons": "12px",
    "pillButtons": "25px"
  },
  "elementGap": "15px",
  "sectionGap": "30px",
  "cardPadding": "15px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action, primary interaction

Solid Sunshine Yellow background (#ffd931), Midnight Ink text (#231f20). Corner radius is 12px for standard and 25px for pill-shaped. Padding is 0px vertical and 15-20px horizontal. Employs classic all-caps Helvetica Neue often at 11px with 0.073em letter spacing.

### Ghost Button

**Role:** Secondary action in a neutral context

Transparent background with Coal Black text (#000000) and 0px radius. Used sparingly for minimal, text-based actions. Padding is 1px vertical and 6px horizontal.

### Product Card

**Role:** Product display with minimal styling

Transparent background with 0px border radius and no box shadow. Relies heavily on image and type for visual presence. Image corners are also sharp (0px radius), allowing visual content to define the shape.

### Shop Badge - Sold

**Role:** Status indicator for product availability

Badge Gray background (#a6a8aa), Coal Black text (#000000), with a 10px border radius. No internal padding is specified; text fills the badge.

### Header Navigation Link

**Role:** Top-level navigation

Uses Helvetica, 11px, with bold letter-spacing (0.091em). Text color is Midnight Ink (#231f20) and links have a strong Coal Black (#000000) bottom border for active states.

### Input Field

**Role:** User data entry

Transparent background with Coal Black text (#000000) or Midnight Ink (#231f20) and a 0px border radius. Padding is minimal at 1px vertical and 2px horizontal.

## Do's

- Use Sunshine Yellow (#ffd931) for all primary interactive elements, ensuring high contrast with Midnight Ink (#231f20) text.
- Employ Times New Roman (or Times) for longer body text and traditional content to provide classic readability.
- Utilize Helvetica (or Arial) for UI elements, labels, and navigation, varying weight for hierarchy and applying generous letter spacing for distinctive impact at larger sizes.
- Set the page background to Soft Stone (#c8cbcd) and header/footer areas to Sunshine Yellow (#ffd931) for consistent brand framing.
- Apply 0px border radius to most cards, images, and inputs, reserving 12px and 25px for buttons and 10px for badges.
- Maintain an element gap of 15px to create a comfortable, structured rhythm without feeling too sparse.
- Use Times Now (or Times New Roman) with low line-height for bold, impactful headlines that capture the brand's 'whimsical' tone.

## Don'ts

- Avoid soft shadows or subtle gradients; emphasize sharp, well-defined blocks of color and strong outlines.
- Do not use generic system fonts without specific letter-spacing adjustments for labels and navigation, as this will dilute the brand's typographic character.
- Never introduce new primary background or accent colors that deviate from the core Sunshine Yellow, Soft Stone, and dark neutrals.
- Steer clear of rounded corners on images or content cards; the aesthetic prioritizes clean, square edges for content display.
- Do not break the clear division between yellow and gray background sections in the primary content flow.
- Avoid using light text on light backgrounds; always ensure strong contrast, leveraging Midnight Ink or Coal Black against Sunshine Yellow or Soft Stone.

## Layout

The page structure follows a max-width contained model, centered on the screen, but the header and footer extend full-bleed with the brand's signature Sunshine Yellow background. The hero section features a prominent, often image-led, centered headline using the Times Now font. Content sections alternate between the Soft Stone background and areas of strong Sunshine Yellow. Images are often placed side-by-side with text sections, or in a three-column grid for product listings. Vertical rhythm is established through consistent element and section gaps (15px and 30px respectively), ensuring a comfortable density. Navigation is a sticky top bar with clearly segmented links.

## Imagery

The visual language relies heavily on product photography featuring jigsaw puzzles, often shown in their packaging. Photography is primarily product-focused, featuring tight crops of the puzzles or people interacting with them in an upbeat, candid style that conveys fun and engagement. Imagery is mostly contained within sharp, unrounded frames, presenting content as distinct blocks. There are no consistent illustration styles, tending towards product images and bold typography. Icons are minimal, typically solid black silhouettes.

## Similar Brands

| Business | Why |
| --- | --- |
| Glossier | Uses a limited, distinct color palette and bold, playful typography for brand recognition. |
| Baggu | Employs simple, graphic shapes and highly saturated colors in an e-commerce context, with a friendly, accessible vibe. |
| Warby Parker | Combines classic serif fonts with clean sans-serifs, and uses a core brand color as a primary accent against neutral backdrops. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- text: #231f20
- background: #c8cbcd
- border: #000000
- accent: #ffd931
- primary action: #ffd931 (filled action)

### 3-5 Example Component Prompts
- Create a primary navigation item: Text 'Shop All' in Helvetica, weight 400, size 11px, letter-spacing 0.091em, color Midnight Ink #231f20. Item has a Coal Black #000000 1px solid bottom border on hover/active.
- Generate a 'Quick Add' button: Background Sunshine Yellow #ffd931, text 'Quick Add' in Helvetica Neue, weight 400, size 11px, letter-spacing 0.073em, color Midnight Ink #231f20, border radius 12px, 0px vertical padding and 15px horizontal padding. The button itself has a 1px Coal Black border.
- Design a main section headline: Text 'Welcome to the Wonderfully Whimsical Weirdo Wigsaw Wuzzle Wumpany.' in Times Now, weight 400, size 47px, color Coal Black #000000, line-height 0.87. Set on a Soft Stone #c8cbcd background section with 30px vertical padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517420040-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777517420040-thumb.jpg |
