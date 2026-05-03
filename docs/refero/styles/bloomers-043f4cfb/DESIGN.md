# Bloomers — Refero Style

- Refero URL: https://styles.refero.design/style/043f4cfb-9fe1-45bc-b4cb-8108fdb475fe
- Site URL: https://bloomers.com.br
- ID: 043f4cfb-9fe1-45bc-b4cb-8108fdb475fe
- Theme: light
- Industry: ecommerce
- Created: 2026-04-30T03:24:33.154Z
- Ranks: newest: 163, popular: 1085, trending: 1092

> Vintage Blossom Dream: a soft, spacious world of pastel gradients, rounded forms, and flowing script where every element feels gently lifted.

## Description

Bloomers evokes a soft, whimsical retro charm through a palette dominated by pastels and warm pinks, accented by a deep, desaturated 'Bloomer Brown' for text. Typography blends a flowing script for headlines with a clean, rounded sans-serif for body text, creating a contrast of playful elegance and clear readability. Components feature heavily rounded corners and subtle, colored shadows that give elements a gentle, lifted appearance, avoiding harshness. The overall aesthetic is light, airy, and feminine, with a spacious layout that emphasizes visual breathing room.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card and badge surfaces, default button fills |
| Bloomer Brown | #5d4037 | neutral | Primary text color, navigation links, borders for interactive elements. This deep, warm brown provides high contrast without being harsh black |
| Rose Bloom | #ff6b9d | accent | Decorative accents, badges, text highlights, and borders for active states or stylized headings. This vivid pink is the brand's primary accent color |
| Blush Pink | #ffd3e2 | accent | Soft shadow tint for cards and buttons, providing a gentle lift with a brand-aligned hue |
| Whisper Gray | #cccccc | neutral | Muted text for secondary information, subtle borders, and background shadows for badges |
| Soft Stone | #888888 | neutral | Link borders and general secondary text elements |
| Sunset Gradient | #ff9a90 | brand | Dominant hero section background and general decorative element fills, defining the site's warm, inviting atmosphere |
| Twilight Gradient | #a18cd1 | brand | Decorative background gradient, used for specific colorful sections |
| Peach Cream Gradient | #ffece6 | brand | Subtle background for UI elements, implying warmth and softness |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Dancing Script | Dancing Script | 700 | 35px, 42px, 48px, 52px, 56px, 72px | 1.10, 1.70 | Used for all primary headings and stylized brand elements. Its bold, flowing script conveys femininity and retro elegance, making it distinct from traditional sans-serif titles. |
| Quicksand | Quicksand | 400, 600, 700, 800 | 13px, 14px, 15px, 16px, 18px, 20px, 22px, 24px, 26px, 60px | 1.20, 1.60, 1.70, 1.90 | The primary typeface for body text, navigation, and button labels. Its rounded, friendly forms ensure clarity, while slightly increased letter-spacing above 15px adds an open, airy feel. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 13 | 1.7 | 0.819 |
| body | 15 | 1.9 | 1.155 |
| subheading | 18 | 1.6 |  |
| heading-sm | 20 | 1.6 |  |
| heading | 22 | 1.6 |  |
| heading-lg | 26 | 1.2 |  |
| display | 72 | 1.1 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "25px",
    "badges": "50px",
    "buttons": "50px"
  },
  "elementGap": "20px",
  "sectionGap": "30px",
  "cardPadding": "35px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Ghost Button Inverse Text

**Role:** Primary Call to Action

Transparent background with 'Canvas White' text and a 2px 'Canvas White' border. Features a pronounced shadow of rgba(255, 107, 157, 0.3) 0px 5px 20px 0px, and an extremely rounded 50px border-radius. Padding is 14px vertical, 35px horizontal. The inverse text color ensures visibility against dark or vibrant backgrounds like the hero gradient.

### Filled Button Primary

**Role:** Secondary Call to Action

Solid 'Canvas White' fill with 'Rose Bloom' text and border. Features the same prominent shadow of rgba(255, 107, 157, 0.3) 0px 5px 20px 0px as ghost buttons, and a 50px border-radius. Larger padding of 18px vertical, 50px horizontal. Used for prominent but not primary actions on light backgrounds.

### Product Card

**Role:** Showcasing products or features

White background with a 25px border-radius. Features a soft 'Blush Pink' shadow: rgba(255, 107, 157, 0.15) 0px 10px 30px 0px, giving a gentle, floating effect. No internal padding specified, allowing content to manage its own spacing.

### Feature Badge

**Role:** Highlighting product attributes or sales

White background with 'Rose Bloom' text, 50px border-radius for a pill shape. Padding is 8px vertical, 18px horizontal. Has a subtle shadow of rgba(0, 0, 0, 0.2) 0px 5px 15px 0px, providing slight depth.

## Do's

- Always use 'Bloomer Brown' (#5d4037) for all primary text content to maintain a soft, natural readability.
- Apply 'Dancing Script' for all headlines and brand elements, using its 700 weight to reinforce the site's retro, elegant atmosphere.
- Ensure all interactive elements, such as buttons and badges, feature a 50px border-radius for a consistent, soft, and approachable pill-like aesthetic.
- Utilize linear gradients like 'Sunset Gradient' (linear-gradient(135deg, rgb(255, 154, 158) 0%, rgb(250, 208, 196) 99%, rgb(250, 208, 196) 100%)) as main section backgrounds to emphasize the site's pastel, whimsical identity.
- Incorporate subtle, 'Blush Pink' shadows (rgba(255, 107, 157, 0.15) 0px 10px 30px 0px) on 'Product Card' components to give them a gentle, lifted appearance without harsh contrasts.
- Maintain a spacious layout with a maximum content width of 1200px and generous vertical spacing, using '30px' as the default section gap and '20px' for element gaps.
- Use 'Rose Bloom' (#ff6b9d) sparingly as a functional accent for highlights, badges, and active states, ensuring it stands out against the muted pastel palette.

## Don'ts

- Avoid harsh, high-contrast dark text or backgrounds; 'Bloomer Brown' is the darkest permissible text color.
- Do not introduce sharp corners or small border-radii; roundedness is key to the brand's soft aesthetic.
- Refrain from using strong, desaturated grays for backgrounds or text; the system relies on warmer neutrals like 'Bloomer Brown' and 'Whisper Gray'.
- Do not neglect the subtle shadow effects on components; they are critical for conveying the desired 'gentle lift' and dimensionality.
- Avoid excessive use of 'Rose Bloom' as a solid background color; its primary role is as an accent or border color to punctuate the design.
- Do not use generic system fonts for body text or navigation; 'Quicksand' maintains the rounded, friendly feel.
- Do not create dense, information-heavy sections; prioritize generous spacing and visual breathing room to align with the spacious aesthetic.

## Layout

The page uses a maximum width of 1200px, with content centered. The hero section is full-bleed, featuring a pastel linear gradient background with a centered, large script headline and a call-to-action button. Subsequent sections alternate between full-width content bands that might feature gradients or a white background. Content within sections is often structured in simple, centered stacks or 2-column text-left/image-right arrangements. There is a strong emphasis on spaciousness, with ample vertical padding between sections and elements. Navigation is a simple top bar, with prominent branding on the left and minimalist links on the right.

## Imagery

The site uses a mix of subtle product photography and decorative, soft illustrations. Photography focuses on tight crops of intimate wear, often showing fabric textures or details, on clean backgrounds without lifestyle context. Illustrations are organic and flowing, featuring elements like butterflies and flowers with a hand-drawn feel, integrated as decorative overlays or background elements. Icons are minimalist, utilizing outline styles with thin strokes. Imagery primarily serves a decorative and atmospheric role, enhancing the feminine and retro mood, rather than being the sole content driver. Density is low, with imagery serving as visual accents in largely text-dominant or gradient-filled sections.

## Elevation

| Element | Style |
| --- | --- |
| Product Card | rgba(255, 107, 157, 0.15) 0px 10px 30px 0px |
| Primary Action Button | rgba(255, 107, 157, 0.3) 0px 5px 20px 0px |
| Feature Badge | rgba(0, 0, 0, 0.2) 0px 5px 15px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Reformation | Shares a vintage aesthetic with a focus on feminine clothing and similar use of soft imagery, though their color palette is usually earthier. |
| For Love & Lemons | Evokes a romantic, whimsical style in fashion and lingerie, often using pastels, soft textures, and decorative typography similar to the script headlines here. |
| Anthropologie | Features a bohemian, vintage-inspired aesthetic, frequent use of unique typography, and a blend of photography and illustrative elements to create a distinctive brand mood. |
| Sugarfina | Known for a soft, pastel color palette, elegant typography, and a luxurious yet playful feel that aligns with Bloomers' approachable femininity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #5d4037
background: #ffffff
border: #5d4037 (for interactive elements), #ff6b9d (for accents)
accent: #ff6b9d
primary action: #5d4037 (outlined action border)

Example Component Prompts:
1. Create a Hero Section: 'Sunset Gradient' (linear-gradient(135deg, rgb(255, 154, 158) 0%, rgb(250, 208, 196) 99%, rgb(250, 208, 196) 100%)) as full-bleed background. Centered primary headline: 'Dancing Script' 72px, weight 700, #5d4037. Directly below, a sub-headline in 'Quicksand' 18px, weight 400, #5d4037. Below that, a 'Ghost Button Inverse Text' using `Canvas White` for text and border, padding 14px 35px, 50px radius, shadow rgba(255, 107, 157, 0.3) 0px 5px 20px 0px.
2. Create a Product Card: 'Canvas White' background, 25px radius, shadow rgba(255, 107, 157, 0.15) 0px 10px 30px 0px. Inside, place an image of a product, then a product name in 'Quicksand' 22px, weight 600, #5d4037, and a price in 'Quicksand' 18px, weight 400, #5d4037.
3. Create a Navigation Item: Text in 'Quicksand' 16px, weight 400, #5d4037. On hover, apply a 2px 'Rose Bloom' (#ff6b9d) bottom border, with the text color remaining 'Bloomer Brown'.
4. Create a Feature Badge: 'Canvas White' background, 'Rose Bloom' (#ff6b9d) text in 'Quicksand' 14px, weight 700, 50px radius, padding 8px 18px, shadow rgba(0, 0, 0, 0.2) 0px 5px 15px 0px. Text is 'Novo'.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519447734-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519447734-thumb.jpg |
